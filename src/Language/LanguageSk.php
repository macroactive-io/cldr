<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule8;
use Macroactive\Cldr\Territory\TerritorySk;

/**
 * Slovak
 *
 * @psalm-immutable
 */
class LanguageSk extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Slovak';
    }

    public function code(): string
    {
        return 'sk';
    }

    public function defaultTerritory(): TerritorySk
    {
        return new TerritorySk();
    }

    public function pluralRule(): PluralRule8
    {
        return new PluralRule8();
    }
}
