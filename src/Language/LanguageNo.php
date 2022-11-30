<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryNo;

/**
 * Class LanguageNo - Representation of the Norwegian language.
 
 * @psalm-immutable
 */
class LanguageNo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'no';
    }

    public function defaultTerritory(): TerritoryNo
    {
        return new TerritoryNo();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
