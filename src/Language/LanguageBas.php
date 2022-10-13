<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageBas - Representation of the Basa (Cameroon) language.
 */
class LanguageBas extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'bas';
    }

    public function defaultTerritory()
    {
        return new TerritoryCm();
    }
}
