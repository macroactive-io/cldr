<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguageBrx - Representation of the Bodo (India) language.
 * @psalm-immutable
 */
class LanguageBrx extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'brx';
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
