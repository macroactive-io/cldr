<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryEs;

/**
 * Class LanguageAn - Representation of the Aragonese language.

 *
 * @psalm-immutable
 */
class LanguageAn extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Aragonese';
    }

    public function code(): string
    {
        return 'an';
    }

    public function defaultTerritory(): TerritoryEs
    {
        return new TerritoryEs();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
