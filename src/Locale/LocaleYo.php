<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageYo;

/**
 * Yoruba
 *
 * @psalm-immutable
 */
class LocaleYo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Èdè Yorùbá';
    }

    public function endonymSortable(): string
    {
        return 'EDE YORUBA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageYo();
    }
}
