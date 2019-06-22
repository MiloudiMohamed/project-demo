<?php

namespace App;

use App\Workshop;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $appends = ['accepted', 'avatar'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function getIsAcceptedAttribute()
    {
        return !!  $this->accepted;
    }

    public function getAvatarAttribute($value)
    {
        if ($value) {
            return "/storage/{$value}";
        }
        return asset('/img/user.png');
    }

    public function team()
    {
        return $this->belongsTo(Role::class);
    }

    public function canLead()
    {
        return $this->level === 'A';
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }

    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }

    public function scopeNotAccepted($query)
    {
        return $query->where('accepted', false);
    }

    public function scopeAccepted($query)
    {
        return $query->where('accepted', true);
    }

    public function scopeDoesntHaveTeam($query)
    {
        return $query->where('team_id',  null);
    }
}
