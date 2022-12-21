<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryLs;

/**
 * Sotho
 *
 * @psalm-immutable
 */
class LanguageSt extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Southern Sotho';
    }

    public function code(): string
    {
        return 'st';
    }

    public function defaultTerritory(): TerritoryLs
    {
        return new TerritoryLs();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
