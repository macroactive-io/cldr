<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryGh;

/**
 * Class LanguageEe - Representation of the Ewe language.
 * @psalm-immutable
 */
class LanguageEe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ee';
    }

    public function defaultTerritory(): TerritoryGh
    {
        return new TerritoryGh();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
