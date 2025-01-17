<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritorySo;

/**
 * Somali
 *
 * @psalm-immutable
 */
class LanguageSo extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Somali';
    }

    public function code(): string
    {
        return 'so';
    }

    public function defaultTerritory(): TerritorySo
    {
        return new TerritorySo();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
