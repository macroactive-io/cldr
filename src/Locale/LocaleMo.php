<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMo;

/**
 * Class LocaleIt - Italian
 * @psalm-immutable
 */
class LocaleMo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'limba moldovenească';
    }

    public function endonymSortable(): string
    {
        return 'LIMBA MOLDOVENEASCĂ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMo();
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
