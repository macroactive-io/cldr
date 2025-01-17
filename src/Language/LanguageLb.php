<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryLu;

/**
 * Luxembourgish
 *
 * @psalm-immutable
 */
class LanguageLb extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Luxembourgish';
    }

    public function code(): string
    {
        return 'lb';
    }

    public function defaultTerritory(): TerritoryLu
    {
        return new TerritoryLu();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
