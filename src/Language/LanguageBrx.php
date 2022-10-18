<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Bodo (India)
 *
 * @psalm-immutable
 */
class LanguageBrx extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'brx';
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
