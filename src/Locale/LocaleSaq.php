<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSaq;

/**
 * Samburu
 *
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
