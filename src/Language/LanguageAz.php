<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryIr;

/**
 * Class LanguageAz - Representation of the Azerbaijani language.
 * @psalm-immutable
 */
class LanguageAz extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'az';
    }

    public function defaultTerritory(): TerritoryIr
    {
        return new TerritoryIr();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
