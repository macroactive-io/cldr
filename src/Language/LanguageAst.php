<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryEs;

/**
 * Asturian
 *
 * @psalm-immutable
 */
class LanguageAst extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Asturian';
    }

    public function code(): string
    {
        return 'ast';
    }

    public function defaultTerritory(): TerritoryEs
    {
        return new TerritoryEs();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
