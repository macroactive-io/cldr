<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryPh;

/**
 * Class LanguageFil - Representation of the Filipino language.
 * @psalm-immutable
 */
class LanguageFil extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'fil';
    }

    public function defaultTerritory(): TerritoryPh
    {
        return new TerritoryPh();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
