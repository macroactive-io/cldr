<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Territory\TerritoryFr;

/**
 * Occitan
 *
 * @psalm-immutable
 */
class LanguageOc extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Occitan (post 1500)';
    }

    public function code(): string
    {
        return 'oc';
    }

    public function defaultTerritory(): TerritoryFr
    {
        return new TerritoryFr();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
