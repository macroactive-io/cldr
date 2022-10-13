<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritorySn;

/**
 * Class LanguageFf - Representation of the Fulah language.
 * @psalm-immutable
 */
class LanguageFf extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ff';
    }

    public function defaultTerritory(): TerritorySn
    {
        return new TerritorySn();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
