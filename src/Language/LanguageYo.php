<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryNg;

/**
 * Class LanguageYo - Representation of the Yoruba language.
 * @psalm-immutable
 */
class LanguageYo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'yo';
    }

    public function defaultTerritory(): TerritoryNg
    {
        return new TerritoryNg();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
