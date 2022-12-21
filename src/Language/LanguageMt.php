<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule13;
use Macroactive\Cldr\Territory\TerritoryMt;

/**
 * Maltese
 *
 * @psalm-immutable
 */
class LanguageMt extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Maltese';
    }

    public function code(): string
    {
        return 'mt';
    }

    public function defaultTerritory(): TerritoryMt
    {
        return new TerritoryMt();
    }

    public function pluralRule(): PluralRule13
    {
        return new PluralRule13();
    }
}
