<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule0;
use Macroactive\Cldr\Territory\TerritoryId;

/**
 * Indonesian
 *
 * @psalm-immutable
 */
class LanguageId extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Indonesian';
    }

    public function code(): string
    {
        return 'id';
    }

    public function defaultTerritory(): TerritoryId
    {
        return new TerritoryId();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
