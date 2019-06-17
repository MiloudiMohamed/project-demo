<?php

namespace App;

use App\Article;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = [];
    protected $appends = ['articlesCount'];

    protected $sum = 0;

    public function members()
    {
        return $this->hasMany(User::class);
    }

    public function articles()
    {
        return $this->hasManyThrough(Article::class, User::class);
    }

    public function leader()
    {
        return $this->members()->where('leader', true)->first();
    }

    public function crew()
    {
        return $this->members()->where('leader', false)->get();
    }

    public function getArticlesCountAttribute()
    {
        $this->members()->get()->each(function($member) {
            $this->sum += $member->articles()->count();
        });

        return $this->sum;
    }
}
