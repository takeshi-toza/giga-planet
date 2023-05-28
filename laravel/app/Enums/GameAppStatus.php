<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class GameAppStatus extends Enum
{
    // 非公開
    const KEEP =   0;
    // 公開
    const RELEASE =   1;

    public static function getDescription($value): string
    {
        if ($value === self::KEEP) {
            return '非公開';
        }
        if ($value === self::RELEASE) {
            return '公開';
        }

        return parent::getDescription($value);
    }
}
