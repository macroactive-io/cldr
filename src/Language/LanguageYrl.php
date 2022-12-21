<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryBr;

/**
 * Class LanguageYrl - Representation of the Kaingang language.

 *
 * @psalm-immutable
 */
class LanguageYrl extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Nhengatu';
    }

    public function code(): string
    {
        return 'yrl';
    }

    public function defaultTerritory(): TerritoryBr
    {
        return new TerritoryBr();
    }
}
