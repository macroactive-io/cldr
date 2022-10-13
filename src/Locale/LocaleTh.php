<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageTh;

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
