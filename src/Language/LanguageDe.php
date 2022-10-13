<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryDe;

/**
 * Class LanguageDe - Representation of the German language.
 * @psalm-immutable
 */
class LanguageDe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'de';
    }

    public function defaultTerritory(): TerritoryDe
    {
        return new TerritoryDe();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
