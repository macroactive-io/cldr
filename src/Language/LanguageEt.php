<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryEe;

/**
 * Estonian
 *
 * @psalm-immutable
 */
class LanguageEt extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Estonian';
    }

    public function code(): string
    {
        return 'et';
    }

    public function defaultTerritory(): TerritoryEe
    {
        return new TerritoryEe();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
