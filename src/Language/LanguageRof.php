<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryTz;

/**
 * Class LanguageRof - Representation of the Rombo language.
 * @psalm-immutable
 */
class LanguageRof extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'rof';
    }

    public function defaultTerritory(): TerritoryTz
    {
        return new TerritoryTz();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
