<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBg;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBg - Bulgarian
 * @psalm-immutable
 */
class LocaleBg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'български';
    }

    public function endonymSortable(): string
    {
        return 'БЪЛГАРСКИ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBg();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function minimumGroupingDigits(): int
    {
        return 2;
    }
}
