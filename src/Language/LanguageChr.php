<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryUs;

/**
 * Class LanguageChr - Representation of the Cherokee language.
 * @psalm-immutable
 */
class LanguageChr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'chr';
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
