<?php
namespace App\Mail;
use App\Post;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class NewComment extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $post;
    public $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Post $post)
    {
        $this->user = $user;
        $this->post = $post;
        $this->text = "Voir";
    }

    /**
     * Build the message.
     *
     * @return $this
     *
     */
    public function build()
    {

        return $this->markdown('mail.newcomment');


    }

}