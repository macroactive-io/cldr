<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryRu;

/**
 * Ossetian
 *
 * @psalm-immutable
 */
class LanguageOs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'os';
    }

    public function defaultTerritory(): TerritoryRu
    {
        return new TerritoryRu();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
