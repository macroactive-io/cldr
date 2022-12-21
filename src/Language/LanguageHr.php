<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Territory\TerritoryHr;

/**
 * Croatian
 *
 * @psalm-immutable
 */
class LanguageHr extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Croatian';
    }

    public function code(): string
    {
        return 'hr';
    }

    public function defaultTerritory(): TerritoryHr
    {
        return new TerritoryHr();
    }

    public function pluralRule(): PluralRule7
    {
        return new PluralRule7();
    }
}
