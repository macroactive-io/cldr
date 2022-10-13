<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLinb - Representation of the Linear B script.
 */
class ScriptLinb extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Linb';
    }

    public function number()
    {
        return '401';
    }

    public function unicodeName()
    {
        return 'Linear_B';
    }
}
