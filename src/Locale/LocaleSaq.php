<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSaq;

/**
 * Class LocaleSaq - Samburu
 * @psalm-immutable
 */
class LocaleSaq extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kisampur';
    }

    public function endonymSortable(): string
    {
        return 'KISAMPUR';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSaq();
    }
}
