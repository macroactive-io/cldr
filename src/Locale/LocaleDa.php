<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDa;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleDa - Danish
 * @psalm-immutable
 */
class LocaleDa extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'danish_ci';
    }

    public function endonym(): string
    {
        return 'dansk';
    }

    public function endonymSortable(): string
    {
        return 'DANSK';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDa();
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
