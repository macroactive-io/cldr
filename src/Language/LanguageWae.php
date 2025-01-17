<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryCh;

/**
 * Walser
 *
 * @psalm-immutable
 */
class LanguageWae extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Walser';
    }

    public function code(): string
    {
        return 'wae';
    }

    public function defaultTerritory(): TerritoryCh
    {
        return new TerritoryCh();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
