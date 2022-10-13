<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule3;

/**
 * Class LanguagePrg - Representation of the Old Prussian language.
 * @psalm-immutable
 */
class LanguagePrg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'prg';
    }

    public function pluralRule(): PluralRule3
    {
        return new PluralRule3();
    }
}
