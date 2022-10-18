<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAs;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Assamese
 *
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
