<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBr;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBr - Breton
 * @psalm-immutable
 */
class LocaleBr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'brezhoneg';
    }

    public function endonymSortable(): string
    {
        return 'BREZHONEG';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBr();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
