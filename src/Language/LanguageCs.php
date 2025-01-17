<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule8;
use Macroactive\Cldr\Territory\TerritoryCz;

/**
 * Czech
 *
 * @psalm-immutable
 */
class LanguageCs extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Czech';
    }

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
