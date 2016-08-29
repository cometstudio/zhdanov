<?php

namespace App\Jobs;

use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User;
use Illuminate\Contracts\Mail\Mailer;

class SubmitVerificationEmail extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $user;

    /**
     * Create a new job instance.
     *
     * @param  User  $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @param  Mailer  $mailer
     * @return void
     * @throws \Exception
     */
    public function handle(Mailer $mailer)
    {
        if(empty($this->user->email)) throw new \Exception;
        if(empty($this->user->token)) throw new \Exception;

        $rootURL = request()->root();
        $verificationURL = $rootURL.'/verify/'.$this->user->token.$this->user->id;

        $mailer->send('emails.verify', ['verificationURL' => $verificationURL, 'rootURL' => $rootURL], function ($message) {
            $message->from('hello@marketsrepublic.ru', 'Markets Republic');
            $message->to($this->user->email);
            $message->subject('Подтвердите свой e-mail');
        });
    }
}
