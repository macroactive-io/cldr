<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryZm;

/**
 * @psalm-immutable
 */
class LanguageBem extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Bemba';
    }

    public function code(): string
    {
        return 'bem';
    }

    public function defaultTerritory(): TerritoryZm
    {
        return new TerritoryZm();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
