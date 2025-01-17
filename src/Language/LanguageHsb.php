<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule10;
use Macroactive\Cldr\Territory\TerritoryDe;

/**
 * Upper Sorbian
 *
 * @psalm-immutable
 */
class LanguageHsb extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Upper Sorbian';
    }

    public function code(): string
    {
        return 'hsb';
    }

    public function defaultTerritory(): TerritoryDe
    {
        return new TerritoryDe();
    }

    public function pluralRule(): PluralRule10
    {
        return new PluralRule10();
    }
}
