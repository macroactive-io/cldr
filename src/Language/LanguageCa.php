<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1WithMillions;
use Macroactive\Cldr\Territory\TerritoryEs;

/**
 * Catalan
 *
 * @psalm-immutable
 */
class LanguageCa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ca';
    }

    public function defaultTerritory(): TerritoryEs
    {
        return new TerritoryEs();
    }

    public function pluralRule(): PluralRule1WithMillions
    {
        return new PluralRule1WithMillions();
    }
}
