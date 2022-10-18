<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryRw;

/**
 * Kinyarwanda
 *
 * @psalm-immutable
 */
class LanguageRw extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'rw';
    }

    public function defaultTerritory(): TerritoryRw
    {
        return new TerritoryRw();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
