<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryNg;

/**
 * Class LanguageAnn - Representation of the Obolo language.
 *
 * @psalm-immutable
 */
class LanguageAnn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ann';
    }

    public function defaultTerritory(): TerritoryNg
    {
        return new TerritoryNg();
    }
}
