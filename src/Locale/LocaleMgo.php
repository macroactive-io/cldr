<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageMgo;

/**
 * Metaʼ
 *
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
