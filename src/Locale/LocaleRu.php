<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageRu;

/**
 * Class LocaleRu - Russian
 * @psalm-immutable
 */
class LocaleRu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'русский';
    }

    public function endonymSortable(): string
    {
        return 'РУССКИЙ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageRu();
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
