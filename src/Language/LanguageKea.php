<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryCv;

/**
 * Class LanguageKea - Representation of the Kabuverdianu language.
 * @psalm-immutable
 */
class LanguageKea extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kea';
    }

    public function defaultTerritory(): TerritoryCv
    {
        return new TerritoryCv();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
