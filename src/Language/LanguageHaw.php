<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryUs;

/**
 * Hawaiian
 *
 * @psalm-immutable
 */
class LanguageHaw extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'haw';
    }

    public function defaultTerritory(): TerritoryUs
    {
        return new TerritoryUs();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
