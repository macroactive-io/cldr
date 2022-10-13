<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageZh;

/**
 * Class LocaleZh - Chinese
 * @psalm-immutable
 */
class LocaleZh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return '中文';
    }

    public function language(): LanguageInterface
    {
        return new LanguageZh();
    }
}
