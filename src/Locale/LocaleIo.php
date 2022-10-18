<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageIo;

/**
 * Class LocaleIo - Ido
 * @psalm-immutable
 */
class LocaleIo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ido';
    }

    public function endonymSortable(): string
    {
        return 'IDO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageIo();
    }
}
