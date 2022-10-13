<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMas;

/**
 * Class LocaleMas - Masai
 * @psalm-immutable
 */
class LocaleMas extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Maa';
    }

    public function endonymSortable(): string
    {
        return 'MAA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMas();
    }
}
