<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMgo;

/**
 * Class LocaleMgo - Metaʼ
 * @psalm-immutable
 */
class LocaleMgo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'metaʼ';
    }

    public function endonymSortable(): string
    {
        return 'META';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMgo();
    }
}
