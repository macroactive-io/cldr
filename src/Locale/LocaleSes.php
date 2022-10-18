<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSes;

/**
 * Class LocaleSes - Koyraboro Senni
 * @psalm-immutable
 */
class LocaleSes extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Koyraboro senni';
    }

    public function endonymSortable(): string
    {
        return 'KOYRABORO SENNI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSes();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
