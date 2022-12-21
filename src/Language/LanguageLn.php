<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Territory\TerritoryCd;

/**
 * Lingala
 *
 * @psalm-immutable
 */
class LanguageLn extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Lingala';
    }

    public function code(): string
    {
        return 'ln';
    }

    public function defaultTerritory(): TerritoryCd
    {
        return new TerritoryCd();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
