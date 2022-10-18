<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTwq;

/**
 * Class LocaleTwq - Tasawaq
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

    public function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
