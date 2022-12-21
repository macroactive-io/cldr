<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryIt;

/**
 * Class LanguageLij - Representation of the Ligurian language.
 *
 * @psalm-immutable
 */
class LanguageLij extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Ligurian';
    }

    public function code(): string
    {
        return 'lij';
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
