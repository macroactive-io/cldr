<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryCh;

/**
 * Swiss German
 *
 * @psalm-immutable
 */
class LanguageGsw extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Swiss German';
    }

    public function code(): string
    {
        return 'gsw';
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
