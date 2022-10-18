<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryFo;

/**
 * Class LanguageFo - Representation of the Faroese language.
 * @psalm-immutable
 */
class LanguageFo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'fo';
    }

    public function defaultTerritory(): TerritoryFo
    {
        return new TerritoryFo();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
