<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryUs;

/**
 * Class LanguageHaw - Representation of the Hawaiian language.
 * @psalm-immutable
 */
class LanguageHaw extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'haw';
    }

    public function defaultTerritory(): TerritoryUs
    {
        return new TerritoryUs();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
