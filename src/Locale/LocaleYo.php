<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageYo;

/**
 * Class LocaleYo - Yoruba
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
