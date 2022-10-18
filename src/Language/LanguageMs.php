<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryMy;

/**
 * Malay
 *
 * @psalm-immutable
 */
class LanguageMs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ms';
    }

    public function defaultTerritory(): TerritoryMy
    {
        return new TerritoryMy();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
