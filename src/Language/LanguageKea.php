<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryCv;

/**
 * Class LanguageKea - Representation of the Kabuverdianu language.
 * @psalm-immutable
 */
class LanguageKea extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kea';
    }

    public function defaultTerritory(): TerritoryCv
    {
        return new TerritoryCv();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
