<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule10;
use Macroactive\Cldr\Territory\TerritoryDe;

/**
 * Lower Sorbian
 *
 * @psalm-immutable
 */
class LanguageDsb extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'dsb';
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
