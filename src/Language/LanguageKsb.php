<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryTz;

/**
 * Shambala
 *
 * @psalm-immutable
 */
class LanguageKsb extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Shambala';
    }

    public function code(): string
    {
        return 'ksb';
    }

    public function defaultTerritory(): TerritoryTz
    {
        return new TerritoryTz();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
