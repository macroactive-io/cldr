<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * Masai
 *
 * @psalm-immutable
 */
class LanguageMas extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Masai';
    }

    public function code(): string
    {
        return 'mas';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
