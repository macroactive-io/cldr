<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryCh;

/**
 * Class LanguageGsw - Representation of the Swiss German language.
 */
class LanguageGsw extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'gsw';
    }

    public function defaultTerritory()
    {
        return new TerritoryCh();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
