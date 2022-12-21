<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryCh;

/**
 * Romansh
 *
 * @psalm-immutable
 */
class LanguageRm extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Romansh';
    }

    public function code(): string
    {
        return 'rm';
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
