<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryNl;

/**
 * Class LanguageFy - Representation of the Western Frisian language.
 * @psalm-immutable
 */
class LanguageFy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'fy';
    }

    public function defaultTerritory(): TerritoryNl
    {
        return new TerritoryNl();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
