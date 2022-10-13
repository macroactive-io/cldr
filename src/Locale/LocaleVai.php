<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageVai;

/**
 * Class LocaleVai - Vai
 * @psalm-immutable
 */
class LocaleVai extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ꕙꔤ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageVai();
    }
}
