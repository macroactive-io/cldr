<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTwq;

/**
 * Tasawaq
 *
 * @psalm-immutable
 */
class LocaleTwq extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Tasawaq senni';
    }

    public function endonymSortable(): string
    {
        return 'TASAWAQ SENNI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTwq();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
