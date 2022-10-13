<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Territory\TerritorySe;

/**
 * Class LanguageSms - Representation of the Lule Sami language.
 * @psalm-immutable
 */
class LanguageSmj extends AbstractLanguage implements LanguageInterface
{
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
