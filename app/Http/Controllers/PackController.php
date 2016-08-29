<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Auth;
use Illuminate\Http\Request;
use App\Models\Course;

class PackController extends Controller
{
    protected $css = 'pack';
    protected $title = 'Портфель';

    public function index(Request $request)
    {
        $courseModel = new Course();

        $modelOptions = $courseModel->getOptions();

        $courses = Course::join('packs', 'courses.id', '=', 'packs.course_id')->get();

        return view('pack.index', [
            'css'=>$this->css,
            'courses'=>$courses,
            'options'=>$modelOptions,
            'title'=>$this->title,
        ]);
    }

    public function act(Request $request, $action = 'add', $courseId = 0)
    {
        $currentUser = Auth::user();

        $location = '';

        if(empty($currentUser)) $location = '/login';

        if(empty($courseId)) throw new \Exception('Не указан id курса');

        switch ($action){
            case 'add':
                if(!Pack::where('user_id', '=', $currentUser->id)->where('course_id', '=', $courseId)->count()){
                    $pid = Pack::create([
                        'user_id'=>$currentUser->id,
                        'course_id'=>$courseId,
                    ]);

                    if(empty($pid)) throw new \Exception('Ошибка при бронировании участия');
                }
            break;
            case 'del':
                if($pack = Pack::where('user_id', '=', $currentUser->id)->where('course_id', '=', $courseId)->first()) {
                    $pack->delete();
                }
            break;
        }

        $total = $currentUser->packs()->count();

        if(empty($total)) $location = route('courses', [], false);

        return response()->json([
            'location'=>$location,
            'total'=>$total,
            'action'=>$action,
            'courseId'=>$courseId,
            'dictionary'=>\Dictionary::get('packs', $total),
        ]);
    }
}
