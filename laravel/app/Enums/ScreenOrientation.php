<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class ScreenOrientation extends Enum
{
    // 未設定
    const NONE = 0;
    // 縦画面
    const PORTRAIT = 1;
    // 横画面
    const LANDSCAPE = 2;

    public static function getDescription($value): string
    {
        if ($value === self::NONE) {
            return '未設定';
        }
        if ($value === self::PORTRAIT) {
            return '縦画面';
        }
        if ($value === self::LANDSCAPE) {
            return '横画面';
        }

        return parent::getDescription($value);
    }
}
