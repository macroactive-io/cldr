<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryNg;

/**
 * Igbo
 *
 * @psalm-immutable
 */
class LanguageIg extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Igbo';
    }

    public function code(): string
    {
        return 'ig';
    }

    public function defaultTerritory(): TerritoryNg
    {
        return new TerritoryNg();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
