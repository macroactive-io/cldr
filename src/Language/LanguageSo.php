<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritorySo;

/**
 * Class LanguageSo - Representation of the Somali language.
 * @psalm-immutable
 */
class LanguageSo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'so';
    }

    public function defaultTerritory(): TerritorySo
    {
        return new TerritorySo();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
