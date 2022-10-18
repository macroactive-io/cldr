<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritorySe;

/**
 * Class LanguageSv - Representation of the Swedish language.
 *
 * @psalm-immutable
 */
class LanguageSv extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sv';
    }

    public function defaultTerritory(): TerritorySe
    {
        return new TerritorySe();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
