<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryMl;

/**
 * @psalm-immutable
 */
class LanguageSes extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Koyraboro Senni Songhai';
    }

    public function code(): string
    {
        return 'ses';
    }

    public function defaultTerritory(): TerritoryMl
    {
        return new TerritoryMl();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
