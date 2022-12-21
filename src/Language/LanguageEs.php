<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1WithMillions;
use Macroactive\Cldr\Territory\TerritoryEs;

/**
 * Spanish
 *
 * @psalm-immutable
 */
class LanguageEs extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Spanish';
    }

    public function code(): string
    {
        return 'es';
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
