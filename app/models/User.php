<?php

namespace App\models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    const USER = 1;
    const ADMIN = 2;
    const EDITOR = 3;
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function posts()
    {
        return $this->hasMany(Post::class, 'post_author');
    }
    public static function getUserRoles()
    {
        return [
            self::USER   => 'کاربر عادی',
            self::ADMIN  => 'کاربر مدیر',
            self::EDITOR => 'کاربر نویسنده'
        ];
    }

    public function hasRole($role)
    {
        return $this->role == $role;
    }

}
