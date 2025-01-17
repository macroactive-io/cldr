<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryIt;

/**
 * Class LanguageSc - Representation of the Sardinian language.

 *
 * @psalm-immutable
 */
class LanguageSc extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Sardinian';
    }

    public function code(): string
    {
        return 'sc';
    }

    public function defaultTerritory(): TerritoryIt
    {
        return new TerritoryIt();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
