<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screenshot extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_app_id',
        'screenshot',
    ];

    public function gameApp()
    {
        return $this->belongsTo('App\Models\GameApp');
    }
}
