<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryDe;

/**
 * Class LanguageDe - Representation of the German language.
 * @psalm-immutable
 */
class LanguageDe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'de';
    }

    public function defaultTerritory(): TerritoryDe
    {
        return new TerritoryDe();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
