<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageJa;

/**
 * Class LocaleJa - Japanese
 * @psalm-immutable
 */
class LocaleJa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return '日本語';
    }

    public function language(): LanguageInterface
    {
        return new LanguageJa();
    }
}
