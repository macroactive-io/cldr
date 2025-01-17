<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryDe;

/**
 * Class LanguageEn - Representation of the North Frisian language.
 *
 * @psalm-immutable
 */
class LanguageFrr extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Northern Frisian';
    }

    public function code(): string
    {
        return 'frr';
    }

    public function defaultTerritory(): TerritoryDe
    {
        return new TerritoryDe();
    }
}
