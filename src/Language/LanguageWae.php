<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryCh;

/**
 * Class LanguageWae - Representation of the Walser language.
 */
class LanguageWae extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'wae';
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
