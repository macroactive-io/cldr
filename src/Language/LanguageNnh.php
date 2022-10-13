<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageNnh - Representation of the Ngiemboon language.
 * @psalm-immutable
 */
class LanguageNnh extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nnh';
    }

    public function defaultTerritory(): TerritoryCm
    {
        return new TerritoryCm();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
