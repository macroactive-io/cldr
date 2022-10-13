<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryFr;

/**
 * Class LanguageBr - Representation of the Breton language.
 * @psalm-immutable
 */
class LanguageBr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'br';
    }

    public function defaultTerritory(): TerritoryFr
    {
        return new TerritoryFr();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
