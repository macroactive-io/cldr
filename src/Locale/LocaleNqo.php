<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNqo;

/**
 * Class LocaleNko - N'Ko
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
