<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryUz;

/**
 * Uzbek
 *
 * @psalm-immutable
 */
class LanguageUz extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Uzbek';
    }

    public function code(): string
    {
        return 'uz';
    }

    public function defaultTerritory(): TerritoryUz
    {
        return new TerritoryUz();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
