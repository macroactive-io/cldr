<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryHu;

/**
 * Hungarian
 *
 * @psalm-immutable
 */
class LanguageHu extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Hungarian';
    }

    public function code(): string
    {
        return 'hu';
    }

    public function defaultTerritory(): TerritoryHu
    {
        return new TerritoryHu();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
