<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageMer - Representation of the Meru language.
 * @psalm-immutable
 */
class LanguageMer extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mer';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
