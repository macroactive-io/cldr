<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBo;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleBo - Tibetan
 * @psalm-immutable
 */
class LocaleBo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'བོད་སྐད་';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBo();
    }
}
