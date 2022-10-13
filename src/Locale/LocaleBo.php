<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBo;
use Fisharebest\Localization\Language\LanguageInterface;

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
