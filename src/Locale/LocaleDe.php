<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDe;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleDe - German
 * @psalm-immutable
 */
class LocaleDe extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'german2_ci';
    }

    public function endonym(): string
    {
        return 'Deutsch';
    }

    public function endonymSortable(): string
    {
        return 'DEUTSCH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDe();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
