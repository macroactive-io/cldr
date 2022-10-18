<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule4;
use Macroactive\Cldr\Territory\TerritoryGb;

/**
 * Scottish Gaelic
 *
 * @psalm-immutable
 */
class LanguageGd extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'gd';
    }

    public function defaultTerritory(): TerritoryGb
    {
        return new TerritoryGb();
    }

    public function pluralRule(): PluralRule4
    {
        return new PluralRule4();
    }
}
