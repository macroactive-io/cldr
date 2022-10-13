<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;

/**
 * Class LanguageEo - Representation of the Esperanto language.
 * @psalm-immutable
 */
class LanguageEo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'eo';
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
