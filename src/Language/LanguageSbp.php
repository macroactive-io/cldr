<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryTz;

/**
 * Class LanguageSbp - Representation of the Sangu (Tanzania) language.
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
