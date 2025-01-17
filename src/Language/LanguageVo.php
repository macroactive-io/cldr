<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;

/**
 * Volapük
 *
 * @psalm-immutable
 */
class LanguageVo extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Volapük';
    }

    public function code(): string
    {
        return 'vo';
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
