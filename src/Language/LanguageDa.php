<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryDk;

/**
 * Danish
 *
 * @psalm-immutable
 */
class LanguageDa extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Danish';
    }

    public function code(): string
    {
        return 'da';
    }

    public function defaultTerritory(): TerritoryDk
    {
        return new TerritoryDk();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
