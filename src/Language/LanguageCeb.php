<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleFilipino;
use Macroactive\Cldr\Territory\TerritoryPh;

/**
 * Class LanguageCeb - Representation of the Cebuano language.
 *
 * @psalm-immutable
 */
class LanguageCeb extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ceb';
    }

    public function defaultTerritory(): TerritoryPh
    {
        return new TerritoryPh();
    }

    public function pluralRule(): PluralRuleFilipino
    {
        return new PluralRuleFilipino();
    }
}
