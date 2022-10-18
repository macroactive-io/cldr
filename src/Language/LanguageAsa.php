<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryTz;

/**
 * Class LanguageAsa - Representation of the Asu (Tanzania) language.
 * @psalm-immutable
 */
class LanguageAsa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'asa';
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
