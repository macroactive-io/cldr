<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule5;
use Fisharebest\Localization\Territory\TerritoryRo;

/**
 * Class LanguageRo - Representation of the Romanian language.
 * @psalm-immutable
 */
class LanguageRo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ro';
    }

    public function defaultTerritory(): TerritoryRo
    {
        return new TerritoryRo();
    }

    public function pluralRule(): PluralRule5
    {
        return new PluralRule5();
    }
}
