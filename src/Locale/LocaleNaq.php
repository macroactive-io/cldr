<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNaq;

/**
 * Class LocaleNaq - Nama
 * @psalm-immutable
 */
class LocaleNaq extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Khoekhoegowab';
    }

    public function endonymSortable(): string
    {
        return 'KHOEKHOEGOWAB';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNaq();
    }
}
