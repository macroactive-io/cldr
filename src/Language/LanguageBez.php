<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryTz;

/**
 * Bena (Tanzania)
 *
 * @psalm-immutable
 */
class LanguageBez extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Bena';
    }

    public function code(): string
    {
        return 'bez';
    }

    public function defaultTerritory(): TerritoryTz
    {
        return new TerritoryTz();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
