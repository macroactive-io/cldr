<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;

/**
 * Class LanguageIo - Representation of the Ido language.
 * @psalm-immutable
 */
class LanguageIo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'io';
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
