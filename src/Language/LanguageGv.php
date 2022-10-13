<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleManx;
use Fisharebest\Localization\Territory\TerritoryIm;

/**
 * Class LanguageGv - Representation of the Manx language.
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
