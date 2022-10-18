<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryCn;

/**
 * Class LanguageBo - Representation of the Tibetan language.
 * @psalm-immutable
 */
class LanguageBo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'bo';
    }

    public function defaultTerritory(): TerritoryCn
    {
        return new TerritoryCn();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
