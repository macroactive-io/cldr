<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Meta'
 *
 * @psalm-immutable
 */
class LanguageMgo extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Meta\'';
    }

    public function code(): string
    {
        return 'mgo';
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
