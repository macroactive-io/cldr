<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritorySn;

/**
 * Wolof
 *
 * @psalm-immutable
 */
class LanguageWo extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Wolof';
    }

    public function code(): string
    {
        return 'wo';
    }

    public function defaultTerritory(): TerritorySn
    {
        return new TerritorySn();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
