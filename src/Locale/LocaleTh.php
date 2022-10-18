<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTh;

/**
 * Class LocaleTh - Thai
 * @psalm-immutable
 */
class LocaleTh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ไทย';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTh();
    }
}
