<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageIi;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Sichuan Yi
 *
 * @psalm-immutable
 */
class LocaleIi extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ꆈꌠꉙ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageIi();
    }
}
