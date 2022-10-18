<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageMk;

/**
 * Macedonian
 *
 * @psalm-immutable
 */
class LocaleMk extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'македонски';
    }

    public function endonymSortable(): string
    {
        return 'МАКЕДОНСКИ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMk();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
