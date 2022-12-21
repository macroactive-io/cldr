<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryTr;

/**
 * Turkish
 *
 * @psalm-immutable
 */
class LanguageTr extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Turkish';
    }

    public function code(): string
    {
        return 'tr';
    }

    public function defaultTerritory(): TerritoryTr
    {
        return new TerritoryTr();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
