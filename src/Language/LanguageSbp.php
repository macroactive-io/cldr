<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryTz;

/**
 * Sangu (Tanzania)
 *
 * @psalm-immutable
 */
class LanguageSbp extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sbp';
    }

    public function defaultTerritory(): TerritoryTz
    {
        return new TerritoryTz();
    }
}
