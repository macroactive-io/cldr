<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryEt;

/**
 * Class LanguageAa - Representation of the Afar language.
 * @psalm-immutable
 */
class LanguageAa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'aa';
    }

    public function defaultTerritory(): TerritoryEt
    {
        return new TerritoryEt();
    }
}
