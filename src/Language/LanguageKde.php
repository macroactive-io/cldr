<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryTz;

/**
 * Makonde
 *
 * @psalm-immutable
 */
class LanguageKde extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Makonde';
    }

    public function code(): string
    {
        return 'kde';
    }

    public function defaultTerritory(): TerritoryTz
    {
        return new TerritoryTz();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
