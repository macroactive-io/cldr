<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryPk;

/**
 * Class LanguageBal - Representation of the Baluchi language.
 * @psalm-immutable
 */
class LanguageBal extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'bal';
    }

    public function defaultTerritory(): TerritoryPk
    {
        return new TerritoryPk();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
