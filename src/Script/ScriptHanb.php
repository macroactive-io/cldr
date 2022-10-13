<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHanb - Representation of the Hangul+Bopomofo script.
 */
class ScriptHanb extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hanb';
    }

    public function number()
    {
        return '503';
    }
}
