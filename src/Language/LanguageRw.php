<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryRw;

/**
 * Class LanguageRw - Representation of the Kinyarwanda language.
 * @psalm-immutable
 */
class LanguageRw extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'rw';
    }

    public function defaultTerritory(): TerritoryRw
    {
        return new TerritoryRw();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
