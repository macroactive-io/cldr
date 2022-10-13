<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCham - Representation of the Cham script.
 */
class ScriptCham extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Cham';
    }

    public function numerals()
    {
        return ['꩐', '꩑', '꩒', '꩓', '꩔', '꩕', '꩖', '꩗', '꩘', '꩙'];
    }

    public function number()
    {
        return '358';
    }

    public function unicodeName()
    {
        return 'Cham';
    }
}
