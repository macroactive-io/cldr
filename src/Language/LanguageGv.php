<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleManx;
use Macroactive\Cldr\Territory\TerritoryIm;

/**
 * Manx
 *
 * @psalm-immutable
 */
class LanguageGv extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'gv';
    }

    public function defaultTerritory(): TerritoryIm
    {
        return new TerritoryIm();
    }

    public function pluralRule(): PluralRuleManx
    {
        return new PluralRuleManx();
    }
}
