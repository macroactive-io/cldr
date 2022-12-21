<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\Territory\TerritoryCm;

/**
 * Duala
 *
 * @psalm-immutable
 */
class LanguageDua extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Duala';
    }

    public function code(): string
    {
        return 'dua';
    }

    public function defaultTerritory(): TerritoryCm
    {
        return new TerritoryCm();
    }
}
