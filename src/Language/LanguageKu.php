<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryTr;

/**
 * Kurdish
 *
 * @psalm-immutable
 */
class LanguageKu extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Kurdish';
    }

    public function code(): string
    {
        return 'ku';
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
