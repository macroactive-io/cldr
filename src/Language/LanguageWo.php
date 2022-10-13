<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritorySn;

/**
 * Class LanguageXh - Representation of the Wolof language.
 * @psalm-immutable
 */
class LanguageWo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'wo';
    }

    public function defaultTerritory(): TerritorySn
    {
        return new TerritorySn();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
