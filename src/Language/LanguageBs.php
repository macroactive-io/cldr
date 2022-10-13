<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Territory\TerritoryBa;

/**
 * Class LanguageBs - Representation of the Bosnian language.
 * @psalm-immutable
 */
class LanguageBs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'bs';
    }

    public function defaultTerritory(): TerritoryBa
    {
        return new TerritoryBa();
    }

    public function pluralRule(): PluralRule7
    {
        return new PluralRule7();
    }
}
