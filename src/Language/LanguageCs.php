<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule8;
use Fisharebest\Localization\Territory\TerritoryCz;

/**
 * Class LanguageCs - Representation of the Czech language.
 */
class LanguageCs extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'cs';
    }

    public function defaultTerritory()
    {
        return new TerritoryCz();
    }

    public function pluralRule()
    {
        return new PluralRule8();
    }
}
