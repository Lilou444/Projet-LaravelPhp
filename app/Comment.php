<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contenu',
    ];
    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function post()
    {
        return $this->belongsTo('App\Post', 'post_id');
    }
}