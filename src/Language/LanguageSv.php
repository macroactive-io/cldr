<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritorySe;

/**
 * Class LanguageSv - Representation of the Swedish language.
 * @psalm-immutable
 */
class LanguageSv extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sv';
    }

    public function defaultTerritory(): TerritorySe
    {
        return new TerritorySe();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
