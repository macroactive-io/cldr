<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryZm;

/**
 * Class LanguageBem - Representation of the Bemba (Zambia) language.
 * @psalm-immutable
 */
class LanguageBem extends AbstractLanguage implements LanguageInterface
{
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
