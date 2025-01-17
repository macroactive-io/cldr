<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryNo;

/**
 * Norwegian Bokmål
 *
 * @psalm-immutable
 */
class LanguageNb extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Norwegian Bokmål';
    }

    public function code(): string
    {
        return 'nb';
    }

    public function defaultTerritory(): TerritoryNo
    {
        return new TerritoryNo();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
