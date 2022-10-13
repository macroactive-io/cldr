<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKo;

/**
 * Class LocaleKo - Korean
 * @psalm-immutable
 */
class LocaleKo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return '한국어';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKo();
    }
}
