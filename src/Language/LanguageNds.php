<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryDe;

/**
 * Low German
 *
 * @psalm-immutable
 */
class LanguageNds extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Low German';
    }

    public function code(): string
    {
        return 'nds';
    }

    public function defaultTerritory(): TerritoryDe
    {
        return new TerritoryDe();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
