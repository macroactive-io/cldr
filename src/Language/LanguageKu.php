<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryTr;

/**
 * Class LanguageKu - Representation of the Kurdish language.
 * @psalm-immutable
 */
class LanguageKu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ku';
    }

    public function defaultTerritory(): TerritoryTr
    {
        return new TerritoryTr();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
