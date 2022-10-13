<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryTm;

/**
 * Class LanguageTk - Representation of the Turkmen language.
 * @psalm-immutable
 */
class LanguageTk extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tk';
    }

    public function defaultTerritory(): TerritoryTm
    {
        return new TerritoryTm();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
