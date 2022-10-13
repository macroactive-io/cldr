<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageLkt;

/**
 * Class LocaleLkt - Lakota
 * @psalm-immutable
 */
class LocaleLkt extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Lakȟólʼiyapi';
    }

    public function endonymSortable(): string
    {
        return 'LAKHOLIYAPI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLkt();
    }
}
