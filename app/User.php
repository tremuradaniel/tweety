<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'avatar',
        'email',
        'password',
    ];

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

    public function timeline()
    {
        $friends = $this->follows()->pluck('id');
        return Tweet::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->withLikes()->orderByDesc('id')->paginate(50);
        // return Tweet::where('user_id', $this->id)->latest()->get();
    }

    public function getAvatarAttribute($value) {
        // return 'https://picsum.photos/280?u=' . $this->email;
        return asset($value ?: '/images/default-avatar.jpeg');
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

    public function path($append = '')
    {
        $path = route('profile', $this->name);
        return $append ? "{$path}/{$append}" : $path;
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }    

    // Laravel 6<
    public function getRouteKeyName()
    {
        return 'name';
    }
}
