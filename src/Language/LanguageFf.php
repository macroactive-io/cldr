<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Territory\TerritorySn;

/**
 * Fulah
 *
 * @psalm-immutable
 */
class LanguageFf extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Fulah';
    }

    public function code(): string
    {
        return 'ff';
    }

    public function defaultTerritory(): TerritorySn
    {
        return new TerritorySn();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
