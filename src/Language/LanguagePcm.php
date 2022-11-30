<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Territory\TerritoryNg;

/**
 * Class LanguagePcm - Representation of the Nigerian Pidgin language.
 * @psalm-immutable
 */
class LanguagePcm extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'pcm';
    }

    public function defaultTerritory(): TerritoryNg
    {
        return new TerritoryNg();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
