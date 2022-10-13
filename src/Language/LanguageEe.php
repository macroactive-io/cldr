<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryGh;

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
