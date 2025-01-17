<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Territory\TerritoryFi;

/**
 * Sami
 *
 * @psalm-immutable
 */
class LanguageSmi extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Sami languages';
    }

    public function code(): string
    {
        return 'smi';
    }

    public function defaultTerritory(): TerritoryFi
    {
        return new TerritoryFi();
    }

    public function pluralRule(): PluralRuleOneTwoOther
    {
        return new PluralRuleOneTwoOther();
    }
}
