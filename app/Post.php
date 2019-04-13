<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titre', 'contenu',
    ];
    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment', 'post_id');
    }
}