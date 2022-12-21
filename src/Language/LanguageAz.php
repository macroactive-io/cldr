<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryIr;

/**
 * Azerbaijani
 *
 * @psalm-immutable
 */
class LanguageAz extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Azerbaijani';
    }

    public function code(): string
    {
        return 'az';
    }

    public function defaultTerritory(): TerritoryIr
    {
        return new TerritoryIr();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
