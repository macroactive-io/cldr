<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageMo;

/**
 * Italian
 *
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
