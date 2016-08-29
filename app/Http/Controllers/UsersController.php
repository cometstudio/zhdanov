<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Jobs\SubmitVerificationEmail;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class UsersController extends Controller
{
    protected $css = 'user';

    public function signup()
    {
        return view('users.signup', [
            'css'=>$this->css,
        ]);
    }

    public function login()
    {
        return view('users.login', [
            'css'=>$this->css,
        ]);
    }

    /**
     * Signup
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function postSignup(Request $request)
    {
        $user = new User();

        // Validate input
        $this->validate($request, $user->getSignupValidationRules(), $user->getSignupValidationMessages());

        // Create a new user
        $user = $user->create($request->all());

        //$this->submitVerificationEmail($user);

        // Force login for the created user
        Auth::login($user, true);

        // Show confirmation form
        return response()->json(['location'=>'/']);
    }

    /**
     * Login
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postLogin(Request $request)
    {
        $user = new User();

        $this->validate($request, $user->getLoginValidationRules(), $user->getLoginValidationMessages());

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password], true)) {

            return response()->json(['location'=>'/']);
        }else{
            return response()->json(['message'=>'Ошибочный пароль или пользователь не зарегистрирован']);
        }
    }

    public function postVerify(Request $request)
    {
        /**
         * @var $user User
         */
        $user = Auth::user();

        if($request->has('email')){
            $rules = ['email'=>'email'];

            if($user->email != $request->input('email')) {
                $rules['email'] .= '|unique:' . $user->getTable() . ',email';
            }

            $this->validate($request, $rules, $user->getValidationMessages());

            if($user->email != $request->input('email')) $user->update($request->all());
        }


        try {
            $this->submitVerificationEmail($user);

            return response()->json(['location'=>'/verify/sent']);
        }catch (\Exception $e){
            //Log::error($e->getMessage(), [__FILE__, __LINE__]);
            return response()->json(['message'=>'Ошибка при отправке e-mail']);
        }
    }

    public function doVerify(Request $request, $token)
    {
        if(empty($token)) throw new NotFoundHttpException;

        /**
         * @var $user User
         */
        $user = User::where(DB::raw('CONCAT(token, id)'), $token)->first();

        if(empty($user)) throw new NotFoundHttpException;

        $user->verified = 1;
        $user->token = NULL;

        $user->update();

        return redirect('/verified');
    }

    /**
     * Submit verification email in a production environment
     * @param User $user
     */
    public function submitVerificationEmail(User $user)
    {
        if(!env('APP_DEBUG')) {
            $user->setAttribute('token', Str::random(24));

            if(!$user->update()) {
                throw new \PDOException;
            }

            $this->dispatch(new SubmitVerificationEmail($user));
        }
    }


    public function deleteProfile(Request $request)
    {
        /**
         * @var $user User
         */
        $user = Auth::user();

        $user->destroy($user->id);

        $this->logout();

        return response()->json(['location'=>'/']);
    }
}
