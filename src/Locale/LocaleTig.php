<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTig;

/**
 * Class LocaleTig - Tigre
 * @psalm-immutable
 */
class LocaleTig extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ትግራይት';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTig();
    }
}
