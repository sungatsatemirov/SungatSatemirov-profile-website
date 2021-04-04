<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail)
    {
        //
        $this->mail = $mail ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('190103481@stu.sdu.edu.kz')
                    ->view('mails.demo')
                    ->text('mails.demo_plain')
                    ->with(
                        [
                            'testVarOne' => '1',
                            'testVarTwo' => '2'
                        ]);
    }
}
