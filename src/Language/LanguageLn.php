<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryCd;

/**
 * Class LanguageLn - Representation of the Lingala language.
 * @psalm-immutable
 */
class LanguageLn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ln';
    }

    public function defaultTerritory(): TerritoryCd
    {
        return new TerritoryCd();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
