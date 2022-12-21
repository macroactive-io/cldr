<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryTo;

/**
 * Tonga (Tonga Islands)
 *
 * @psalm-immutable
 */
class LanguageTo extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Tonga (Tonga Islands)';
    }

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
