<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class AppGenre extends Enum
{
    // アクション
    const ACTION = 1;
    // ロールプレイング
    const RPG = 2;
    // パズル
    const PUZZLE = 3;
    // アドベンチャー
    const ADVENTURE = 4;
    // シミュレーション
    const SIMULATION = 5;
    // シューティング
    const SHOOTING = 6;
    // リズム
    const RHYTHM = 7;
    // テーブル
    const TABLE = 8;
    // 写真
    const PHOTO = 9;

    public static function getDescription($value): string
    {
        if ($value === self::ACTION) {
            return 'アクション';
        }
        if ($value === self::RPG) {
            return 'ロールプレイング';
        }
        if ($value === self::PUZZLE) {
            return 'パズル';
        }
        if ($value === self::ADVENTURE) {
            return 'アドベンチャー';
        }
        if ($value === self::SIMULATION) {
            return 'シミュレーション';
        }
        if ($value === self::SHOOTING) {
            return 'シューティング';
        }
        if ($value === self::RHYTHM) {
            return 'リズム';
        }
        if ($value === self::TABLE) {
            return 'テーブル';
        }
        if ($value === self::PHOTO) {
            return '写真';
        }

        return parent::getDescription($value);
    }
}
