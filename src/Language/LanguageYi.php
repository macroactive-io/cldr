<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptHebr;

/**
 * Class LanguageYi - Representation of the Yiddish language.
 * @psalm-immutable
 */
class LanguageYi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'yi';
    }

    public function defaultScript(): ScriptHebr
    {
        return new ScriptHebr();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
