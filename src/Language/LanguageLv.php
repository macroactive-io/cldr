<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule3;
use Macroactive\Cldr\Territory\TerritoryLv;

/**
 * Latvian
 *
 * @psalm-immutable
 */
class LanguageLv extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Latvian';
    }

    public function code(): string
    {
        return 'lv';
    }

    public function defaultTerritory(): TerritoryLv
    {
        return new TerritoryLv();
    }

    public function pluralRule(): PluralRule3
    {
        return new PluralRule3();
    }
}
