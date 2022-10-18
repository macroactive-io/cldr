<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryZw;

/**
 * Class LanguageSn - Representation of the Shona language.
 * @psalm-immutable
 */
class LanguageSn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sn';
    }

    public function defaultTerritory(): TerritoryZw
    {
        return new TerritoryZw();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
