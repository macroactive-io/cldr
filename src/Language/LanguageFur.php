<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryIt;

/**
 * Friulian
 *
 * @psalm-immutable
 */
class LanguageFur extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Friulian';
    }

    public function code(): string
    {
        return 'fur';
    }

    public function defaultTerritory(): TerritoryIt
    {
        return new TerritoryIt();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
