<?php
namespace App\Listeners;
use App\Events\NewComment as EventNewComment;
use App\Mail\NewComment as MailNewComment;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
class SendNewCommentNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /**
     * Handle the event.
     *
     * @param  NewComment  $event
     * @return void
     */
    public function handle(EventNewComment $event)
    {
        $comment = $event->comment;
        $postOwner = $comment->post->owner;
        $users = collect($comment->post->comments->pluck('user_id'));
        if(!$users->contains($postOwner->id)){
            $users->push($postOwner->id);
        }
        foreach ($users as $user){
            $user = User::find($user);
            Mail::to($user)->send(new MailNewComment($user, $comment->post));
        }
    }
}
