<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryCf;

/**
 * Class LanguageSg - Representation of the Sango language.
 * @psalm-immutable
 */
class LanguageSg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sg';
    }

    public function defaultTerritory(): TerritoryCf
    {
        return new TerritoryCf();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
