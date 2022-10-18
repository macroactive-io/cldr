<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryNo;

/**
 * Class LanguageSe - Representation of the Northern Sami language.
 *
 * @psalm-immutable
 */
class LanguageSe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'se';
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
