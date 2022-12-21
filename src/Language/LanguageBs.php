<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Territory\TerritoryBa;

/**
 * Bosnian
 *
 * @psalm-immutable
 */
class LanguageBs extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Bosnian';
    }

    public function code(): string
    {
        return 'bs';
    }

    public function defaultTerritory(): TerritoryBa
    {
        return new TerritoryBa();
    }

    public function pluralRule(): PluralRule7
    {
        return new PluralRule7();
    }
}
