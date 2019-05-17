<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	// protected $table = 'posts';
    protected $fillable = [
        'title',
        'body',
        
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
