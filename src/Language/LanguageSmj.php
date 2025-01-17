<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Territory\TerritorySe;

/**
 * Lule Sami
 *
 * @psalm-immutable
 */
class LanguageSmj extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Lule Sami';
    }

    public function code(): string
    {
        return 'smj';
    }

    public function defaultTerritory(): TerritorySe
    {
        return new TerritorySe();
    }

    public function pluralRule(): PluralRuleOneTwoOther
    {
        return new PluralRuleOneTwoOther();
    }
}
