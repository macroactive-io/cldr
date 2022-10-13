<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAs;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAs - Assamese
 * @psalm-immutable
 */
class LocaleAs extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'অসমীয়া';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAs();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
