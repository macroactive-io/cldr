<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptAdlm;

/**
 * Class LocaleFfAdlm - Fulah
 *
 * @psalm-immutable
 */
class LocaleFfAdlm extends LocaleFf
{
    public function endonym(): string
    {
        return '𞤊𞤵𞤤𞤬𞤵𞤤𞤣𞤫';
    }

    public function endonymSortable(): string
    {
        return '𞤊𞤵𞤤𞤬𞤵𞤤𞤣𞤫';
    }

    public function script(): ScriptAdlm
    {
        return new ScriptAdlm();
    }

    protected function numberSymbols(): array
    {
        return [
            self::DECIMAL => self::DOT,
            self::GROUP   => self::ADLM_GROUP,
        ];
    }
}
