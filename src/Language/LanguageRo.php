<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule5;
use Macroactive\Cldr\Territory\TerritoryRo;

/**
 * Romanian
 *
 * @psalm-immutable
 */
class LanguageRo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ro';
    }

    public function defaultTerritory(): TerritoryRo
    {
        return new TerritoryRo();
    }

    public function pluralRule(): PluralRule5
    {
        return new PluralRule5();
    }
}
