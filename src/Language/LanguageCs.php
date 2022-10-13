<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule8;
use Fisharebest\Localization\Territory\TerritoryCz;

/**
 * Class LanguageCs - Representation of the Czech language.
 * @psalm-immutable
 */
class LanguageCs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'cs';
    }

    public function defaultTerritory(): TerritoryCz
    {
        return new TerritoryCz();
    }

    public function pluralRule(): PluralRule8
    {
        return new PluralRule8();
    }
}
