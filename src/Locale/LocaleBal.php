<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBal;

/**
 * Class LocaleBal - Baluchi
 *
 * @psalm-immutable
 */
class LocaleBal extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Tok Pisin';
    }

    public function language(): LanguageBal
    {
        return new LanguageBal();
    }
}
