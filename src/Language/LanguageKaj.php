<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryNg;

/**
 * Class LanguageKcg - Representation of the Katab language.
 * @psalm-immutable
 */
class LanguageKaj extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kaj';
    }

    public function defaultTerritory(): TerritoryNg
    {
        return new TerritoryNg();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
