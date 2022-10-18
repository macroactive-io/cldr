<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryTo;

/**
 * Class LanguageTo - Representation of the Tonga (Tonga Islands) language.
 * @psalm-immutable
 */
class LanguageTo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'to';
    }

    public function defaultTerritory(): TerritoryTo
    {
        return new TerritoryTo();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
