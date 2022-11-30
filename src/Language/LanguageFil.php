<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleFilipino;
use Macroactive\Cldr\Territory\TerritoryPh;

/**
 * Filipino
 *
 * @psalm-immutable
 */
class LanguageFil extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'fil';
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
