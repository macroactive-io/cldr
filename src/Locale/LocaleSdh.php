<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageSdh;

/**
 * Class LocaleSdh - Southern Kurdish
 *
 * @psalm-immutable
 */
class LocaleSdh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kurdî';
    }

    public function endonymSortable(): string
    {
        return 'KURDI';
    }

    public function language(): LanguageSdh
    {
        return new LanguageSdh();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PERCENT . '%s';
    }
}
