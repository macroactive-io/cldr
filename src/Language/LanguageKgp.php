<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryBr;

/**
 * Class LanguageKgp - Representation of the Kaingang language.

 *
 * @psalm-immutable
 */
class LanguageKgp extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Kaingang';
    }

    public function code(): string
    {
        return 'kgp';
    }

    public function defaultTerritory(): TerritoryBr
    {
        return new TerritoryBr();
    }
}
