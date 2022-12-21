<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule16;
use Macroactive\Cldr\Territory\TerritoryFr;

/**
 * Breton
 *
 * @psalm-immutable
 */
class LanguageBr extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Breton';
    }

    public function code(): string
    {
        return 'br';
    }

    public function defaultTerritory(): TerritoryFr
    {
        return new TerritoryFr();
    }

    public function pluralRule(): PluralRule16
    {
        return new PluralRule16();
    }
}
