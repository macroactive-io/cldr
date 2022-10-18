<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryKe;

/**
 * Class LanguageKam - Representation of the Kamba (Kenya) language.
 * @psalm-immutable
 */
class LanguageKam extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kam';
    }

    public function defaultTerritory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
