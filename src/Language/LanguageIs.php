<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule15;
use Fisharebest\Localization\Territory\TerritoryIs;

/**
 * Class LanguageIs - Representation of the Icelandic language.
 * @psalm-immutable
 */
class LanguageIs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'is';
    }

    public function defaultTerritory(): TerritoryIs
    {
        return new TerritoryIs();
    }

    public function pluralRule(): PluralRule15
    {
        return new PluralRule15();
    }
}
