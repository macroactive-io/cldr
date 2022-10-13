<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\Territory029;

/**
 * Class LanguagePap - Representation of the Papiamentu language.
 * @psalm-immutable
 */
class LanguagePap extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'pap';
    }

    public function defaultTerritory(): Territory029
    {
        return new Territory029();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
