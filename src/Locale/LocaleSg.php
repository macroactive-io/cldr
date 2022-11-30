<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSg;

/**
 * Sango
 *
 * @psalm-immutable
 */
class LocaleSg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Sängö';
    }

    public function endonymSortable(): string
    {
        return 'SANGO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSg();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
