<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptAghb - Representation of the Caucasian Albanian script.
 */
class ScriptAghb extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Aghb';
    }

    public function number()
    {
        return '239';
    }

    public function unicodeName()
    {
        return 'Caucasian_Albanian';
    }
}
