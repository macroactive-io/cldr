<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryMl;

/**
 * Class LanguageSes - Representation of the Koyraboro Senni Songhai language.
 * @psalm-immutable
 */
class LanguageSes extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ses';
    }

    public function defaultTerritory(): TerritoryMl
    {
        return new TerritoryMl();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
