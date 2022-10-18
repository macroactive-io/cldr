<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryGb;

/**
 * Anglo-Saxon / Old-English
 *
 * @psalm-immutable
 */
class LanguageAng extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ang';
    }

    public function defaultTerritory(): TerritoryGb
    {
        return new TerritoryGb();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
