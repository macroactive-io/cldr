<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryVn;

/**
 * Vietnamese
 *
 * @psalm-immutable
 */
class LanguageVi extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Vietnamese';
    }

    public function code(): string
    {
        return 'vi';
    }

    public function defaultTerritory(): TerritoryVn
    {
        return new TerritoryVn();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
