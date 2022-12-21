<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Ngomba
 *
 * @psalm-immutable
 */
class LanguageJgo extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Ngomba';
    }

    public function code(): string
    {
        return 'jgo';
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
