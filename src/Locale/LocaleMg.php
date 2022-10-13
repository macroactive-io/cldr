<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMg;

/**
 * Class LocaleMg - Malagasy
 * @psalm-immutable
 */
class LocaleMg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Malagasy';
    }

    public function endonymSortable(): string
    {
        return 'MALAGASY';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMg();
    }
}
