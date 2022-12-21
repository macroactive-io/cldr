<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryIt;

/**
 * Sicilian
 *
 * @psalm-immutable
 */
class LanguageScn extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Sicilian';
    }

    public function code(): string
    {
        return 'scn';
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
