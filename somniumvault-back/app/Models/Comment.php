<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'dream_id',
        'user_id',
        'content',
    ];

    public function dream()
    {
        return $this->belongsTo(Dream::class, 'dream_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
