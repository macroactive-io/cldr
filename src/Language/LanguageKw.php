<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleCornish;
use Macroactive\Cldr\Territory\TerritoryGb;

/**
 * Cornish
 *
 * @psalm-immutable
 */
class LanguageKw extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Cornish';
    }

    public function code(): string
    {
        return 'kw';
    }

    public function defaultTerritory(): TerritoryGb
    {
        return new TerritoryGb();
    }

    public function pluralRule(): PluralRuleCornish
    {
        return new PluralRuleCornish();
    }
}
