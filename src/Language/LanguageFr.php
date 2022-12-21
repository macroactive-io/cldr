<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2WithMillions;
use Macroactive\Cldr\Territory\TerritoryFr;

/**
 * French
 *
 * @psalm-immutable
 */
class LanguageFr extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'French';
    }

    public function code(): string
    {
        return 'fr';
    }

    public function defaultTerritory(): TerritoryFr
    {
        return new TerritoryFr();
    }

    public function pluralRule(): PluralRule2WithMillions
    {
        return new PluralRule2WithMillions();
    }
}
