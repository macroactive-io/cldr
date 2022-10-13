<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule8;
use Fisharebest\Localization\Territory\TerritorySk;

/**
 * Class LanguageSk - Representation of the Slovak language.
 * @psalm-immutable
 */
class LanguageSk extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sk';
    }

    public function defaultTerritory(): TerritorySk
    {
        return new TerritorySk();
    }

    public function pluralRule(): PluralRule8
    {
        return new PluralRule8();
    }
}
