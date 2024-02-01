<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = 'movies';
    protected $primary = 'id';
    protected $filltable = [
        'id','company_id','title','budget','homepage','overview','popularity','release_date','revenue','runtime','movie_status','tagline', 'vote_average','vote_count'
    ];
    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
