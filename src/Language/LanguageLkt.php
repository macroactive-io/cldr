<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryUs;

/**
 * Class LanguageLkt - Representation of the Lakota language.
 * @psalm-immutable
 */
class LanguageLkt extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lkt';
    }

    public function defaultTerritory(): TerritoryUs
    {
        return new TerritoryUs();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
