<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const PUBLISHED = 1;
    const FUTURE = 2;
    const DRAFT = 3;
    const PENDING = 4;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'post_author', '');
    }
    public static function postStatuses(int $status = null)
    {
        $statuses = [
            self::DRAFT     => 'پیشنویس',
            self::FUTURE    => 'زمان بندی',
            self::PENDING   => 'بازبینی',
            self::PUBLISHED => 'منتشر شده'
        ];
        if ( ! is_null($status) && in_array($status, array_keys($statuses))) {
            return $statuses[$status];
        }

        return $statuses;
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_post', 'post_id', 'category_id');
    }
}
