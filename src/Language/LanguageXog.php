<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryUg;

/**
 * Soga
 *
 * @psalm-immutable
 */
class LanguageXog extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Soga';
    }

    public function code(): string
    {
        return 'xog';
    }

    public function defaultTerritory(): TerritoryUg
    {
        return new TerritoryUg();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
