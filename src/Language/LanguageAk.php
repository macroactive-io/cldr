<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryGh;

/**
 * Class LanguageAk - Representation of the Akan language.
 * @psalm-immutable
 */
class LanguageAk extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ak';
    }

    public function defaultTerritory(): TerritoryGh
    {
        return new TerritoryGh();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
