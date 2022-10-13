<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageMas - Representation of the Masai language.
 * @psalm-immutable
 */
class LanguageMas extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mas';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
