<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule6;
use Macroactive\Cldr\Territory\TerritoryLt;

/**
 * Lithuanian
 *
 * @psalm-immutable
 */
class LanguageLt extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lt';
    }

    public function defaultTerritory(): TerritoryLt
    {
        return new TerritoryLt();
    }

    public function pluralRule(): PluralRule6
    {
        return new PluralRule6();
    }
}
