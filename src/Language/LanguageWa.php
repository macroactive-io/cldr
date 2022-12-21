<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Territory\TerritoryBe;

/**
 * Walloon
 *
 * @psalm-immutable
 */
class LanguageWa extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Walloon';
    }

    public function code(): string
    {
        return 'wa';
    }

    public function defaultTerritory(): TerritoryBe
    {
        return new TerritoryBe();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
