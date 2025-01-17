<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Territory\TerritoryGh;

/**
 * Akan
 *
 * @psalm-immutable
 */
class LanguageAk extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Akan';
    }

    public function code(): string
    {
        return 'ak';
    }

    public function defaultTerritory(): TerritoryGh
    {
        return new TerritoryGh();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
