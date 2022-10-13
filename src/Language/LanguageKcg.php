<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryNg;

/**
 * Class LanguageKcg - Representation of the Katab language.
 * @psalm-immutable
 */
class LanguageKcg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kcg';
    }

    public function defaultTerritory(): TerritoryNg
    {
        return new TerritoryNg();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
