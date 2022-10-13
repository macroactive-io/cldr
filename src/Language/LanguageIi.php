<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryCn;

/**
 * Class LanguageIi - Representation of the Sichuan Yi language.
 * @psalm-immutable
 */
class LanguageIi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ii';
    }

    public function defaultTerritory(): TerritoryCn
    {
        return new TerritoryCn();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
