<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameApp extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_id',
        'title',
        'introduction',
        'short_title',
        'short_introduction',
        'status',
        'genres_id',
        'icon',
        'main_image',
        'sub_image',
        'ios_store_url',
        'android_store_url',
        'youtube_url',
    ];

    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }

    public function screenshot()
    {
        return $this->hasMany('App\Models\Screenshot');
    }
}
