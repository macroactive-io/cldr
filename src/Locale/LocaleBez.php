<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBez;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleBez - Bena
 * @psalm-immutable
 */
class LocaleBez extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Hibena';
    }

    public function endonymSortable(): string
    {
        return 'HIBENA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBez();
    }
}
