<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryCh;

/**
 * Class LanguageWae - Representation of the Walser language.
 * @psalm-immutable
 */
class LanguageWae extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'wae';
    }

    public function defaultTerritory(): TerritoryCh
    {
        return new TerritoryCh();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
