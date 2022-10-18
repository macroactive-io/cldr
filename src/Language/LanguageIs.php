<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule15;
use Macroactive\Cldr\Territory\TerritoryIs;

/**
 * Icelandic
 *
 * @psalm-immutable
 */
class LanguageIs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'is';
    }

    public function defaultTerritory(): TerritoryIs
    {
        return new TerritoryIs();
    }

    public function pluralRule(): PluralRule15
    {
        return new PluralRule15();
    }
}
