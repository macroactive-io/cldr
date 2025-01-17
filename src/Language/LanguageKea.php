<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryCv;

/**
 * Kabuverdianu
 *
 * @psalm-immutable
 */
class LanguageKea extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Kabuverdianu';
    }

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
