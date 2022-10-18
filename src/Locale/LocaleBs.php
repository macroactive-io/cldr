<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBs;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Bosnian
 *
 * @psalm-immutable
 */
class LocaleBs extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'bosanski';
    }

    public function endonymSortable(): string
    {
        return 'BOSANSKI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBs();
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
