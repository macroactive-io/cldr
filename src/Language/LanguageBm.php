<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryMl;

/**
 * Class LanguageBm - Representation of the Bambara language.
 * @psalm-immutable
 */
class LanguageBm extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'bm';
    }

    public function defaultTerritory(): TerritoryMl
    {
        return new TerritoryMl();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
