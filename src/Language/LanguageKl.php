<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryGl;

/**
 * Class LanguageKl - Representation of the Kalaallisut language.
 * @psalm-immutable
 */
class LanguageKl extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kl';
    }

    public function defaultTerritory(): TerritoryGl
    {
        return new TerritoryGl();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
