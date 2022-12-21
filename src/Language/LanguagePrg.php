<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule3;

/**
 * Old Prussian
 *
 * @psalm-immutable
 */
class LanguagePrg extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Prussian';
    }

    public function code(): string
    {
        return 'prg';
    }

    public function pluralRule(): PluralRule3
    {
        return new PluralRule3();
    }
}
