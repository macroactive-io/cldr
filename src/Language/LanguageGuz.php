<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageGuz - Representation of the Gusii language.
 * @psalm-immutable
 */
class LanguageGuz extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'guz';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
