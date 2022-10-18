<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryKg;

/**
 * Class LanguageKy - Representation of the Kirghiz language.
 * @psalm-immutable
 */
class LanguageKy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ky';
    }

    public function defaultTerritory(): TerritoryKg
    {
        return new TerritoryKg();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
