<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule13;
use Fisharebest\Localization\Territory\TerritoryMt;

/**
 * Class LanguageMt - Representation of the Maltese language.
 * @psalm-immutable
 */
class LanguageMt extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mt';
    }

    public function defaultTerritory(): TerritoryMt
    {
        return new TerritoryMt();
    }

    public function pluralRule(): PluralRule13
    {
        return new PluralRule13();
    }
}
