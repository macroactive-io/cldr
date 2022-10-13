<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;

/**
 * Class LanguageAr - Representation of the Arabic language.
 * @psalm-immutable
 */
class LanguageAr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ar';
    }

    public function defaultScript(): ScriptArab
    {
        return new ScriptArab();
    }

    public function pluralRule(): PluralRule12
    {
        return new PluralRule12();
    }
}
