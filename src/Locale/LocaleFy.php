<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageFy;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Western Frisian
 *
 * @psalm-immutable
 */
class LocaleFy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Frysk';
    }

    public function endonymSortable(): string
    {
        return 'FRYSK';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFy();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
