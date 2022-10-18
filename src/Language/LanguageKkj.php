<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Class LanguageKkj - Representation of the Kako language.
 * @psalm-immutable
 */
class LanguageKkj extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kkj';
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
