<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageKln - Representation of the Kalenjin language.
 * @psalm-immutable
 */
class LanguageKln extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kln';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
