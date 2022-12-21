<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryTz;

/**
 * Vunjo
 *
 * @psalm-immutable
 */
class LanguageVun extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Vunjo';
    }

    public function code(): string
    {
        return 'vun';
    }

    public function defaultTerritory(): TerritoryTz
    {
        return new TerritoryTz();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
