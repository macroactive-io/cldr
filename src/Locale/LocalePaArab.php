<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptArab;

/**
 * Class LocalePaArab
 */
class LocalePaArab extends LocalePa
{
    public function numberSymbols()
    {
        return [
            self::DECIMAL => self::ARAB_DECIMAL,
        ];
    }

    public function script()
    {
        return new ScriptArab();
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT;
    }
}
