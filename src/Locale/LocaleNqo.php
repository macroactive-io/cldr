<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageNqo;

/**
 * N'Ko
 *
 * @psalm-immutable
 */
class LocaleNqo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ߒߞߏ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNqo();
    }
}
