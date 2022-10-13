<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptEgyh - Representation of the Egyptian hieratic script.
 */
class ScriptEgyh extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Egyh';
    }

    public function number()
    {
        return '060';
    }
}
