<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBh;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBh - Bihari
 * @psalm-immutable
 */
class LocaleBh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Bihari';
    }

    public function endonymSortable(): string
    {
        return 'BIHARI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBh();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
