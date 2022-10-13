<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAk;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAk - Akan
 * @psalm-immutable
 */
class LocaleAk extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Akan';
    }

    public function endonymSortable(): string
    {
        return 'AKAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAk();
    }
}
