<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryNo;

/**
 * Norwegian Nynorsk
 *
 * @psalm-immutable
 */
class LanguageNn extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Norwegian Nynorsk';
    }

    public function code(): string
    {
        return 'nn';
    }

    public function defaultTerritory(): TerritoryNo
    {
        return new TerritoryNo();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
