<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;

/**
 * Class LanguageEn - Representation of the English language.
 * @psalm-immutable
 */
class LanguageEn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'en';
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
