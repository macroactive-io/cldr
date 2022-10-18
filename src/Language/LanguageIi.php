<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryCn;

/**
 * Sichuan Yi
 *
 * @psalm-immutable
 */
class LanguageIi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ii';
    }

    public function defaultTerritory(): TerritoryCn
    {
        return new TerritoryCn();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
