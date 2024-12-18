<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    //
    use HasFactory;

    // Fillable fields for mass assignment
    protected $fillable = ['user_id', 'post_id'];

    /**
     * Relationship: RSVP belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship: RSVP belongs to a Post.
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
