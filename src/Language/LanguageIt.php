<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1WithMillions;
use Macroactive\Cldr\Territory\TerritoryIt;

/**
 * Italian
 *
 * @psalm-immutable
 */
class LanguageIt extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'it';
    }

    public function defaultTerritory(): TerritoryIt
    {
        return new TerritoryIt();
    }

    public function pluralRule(): PluralRule1WithMillions
    {
        return new PluralRule1WithMillions();
    }
}
