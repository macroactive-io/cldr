<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSmi;

/**
 * Class LocaleSmi
 * @psalm-immutable
 */
class LocaleSmi extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'saami';
    }

    public function endonymSortable(): string
    {
        return 'SAAMI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSmi();
    }
}
