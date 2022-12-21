<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryNo;

/**
 * Northern Sami
 *
 * @psalm-immutable
 */
class LanguageSe extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Northern Sami';
    }

    public function code(): string
    {
        return 'se';
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
