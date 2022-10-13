<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBm;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBm - Bambara
 * @psalm-immutable
 */
class LocaleBm extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'bamanakan';
    }

    public function endonymSortable(): string
    {
        return 'BAMANAKAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBm();
    }
}
