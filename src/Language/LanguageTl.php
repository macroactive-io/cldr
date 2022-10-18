<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleTagalog;
use Macroactive\Cldr\Territory\TerritoryPh;

/**
 * Tagalog
 *
 * @psalm-immutable
 */
class LanguageTl extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tl';
    }

    public function defaultTerritory(): TerritoryPh
    {
        return new TerritoryPh();
    }

    public function pluralRule(): PluralRuleTagalog
    {
        return new PluralRuleTagalog();
    }
}
