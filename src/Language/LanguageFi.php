<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryFi;

/**
 * Class LanguageFi - Representation of the Finnish language.
 * @psalm-immutable
 */
class LanguageFi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'fi';
    }

    public function defaultTerritory(): TerritoryFi
    {
        return new TerritoryFi();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
