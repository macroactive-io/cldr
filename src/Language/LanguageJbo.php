<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;

/**
 * Class LanguageJbo - Representation of the Lojban language.
 * @psalm-immutable
 */
class LanguageJbo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'jbo';
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
