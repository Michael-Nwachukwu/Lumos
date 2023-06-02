<?php

namespace App\Mail;

use App\Models\Homework;
use App\Models\User;
use App\Models\Course;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Message;

class HomeworkNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $course;
    public $homework;
    public $pdfPath; // Add a new property to store the PDF file path or URL

    /**
     * Create a new message instance.
     *
     *  @param  User  $user
     *  @param  Course  $course
     *  @param  Homework  $
     *  @param string $pdfPath
     *  @return void
     */
    public function __construct(User $user, Course $course, Homework $homework, $pdfPath = null)
    {
        $this->user = $user;
        $this->course = $course;
        $this->homework = $homework;
        $this->pdfPath = $pdfPath; // Assign the PDF file path or URL to the property
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // public function build()
    // {
    //     // return $this->view('view.name');
    //     return $this->markdown('emails.homework.notification')
    //         ->subject('New Homework Notification')
    //         ->attach($this->pdfPath); // Attach the PDF file to the email

            
    // }


    public function build()
    {
        $email = $this->subject('Homework Notification')
            ->view('emails.homework.notification')
            ->subject('New Homework Notification')
            ->with([
                'user' => $this->user,
                'course' => $this->course,
                'homework' => $this->homework,
            ]);

        if ($this->pdfPath) {
            $email->attach($this->pdfPath, [
                'as' => 'homework.pdf',
                'mime' => 'application/pdf',
            ]);
        }

        return $email;
    }


}
