<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryBw;

/**
 * Class LanguageTn - Representation of the Tswana language.
 * @psalm-immutable
 */
class LanguageTn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tn';
    }

    public function defaultTerritory(): TerritoryBw
    {
        return new TerritoryBw();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
