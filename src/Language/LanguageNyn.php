<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryUg;

/**
 * Class LanguageNyn - Representation of the Nyankole language.
 * @psalm-immutable
 */
class LanguageNyn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nyn';
    }

    public function defaultTerritory(): TerritoryUg
    {
        return new TerritoryUg();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
