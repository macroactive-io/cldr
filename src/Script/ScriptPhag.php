<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPhag - Representation of the Phags-pa script.
 */
class ScriptPhag extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Phag';
    }

    public function number()
    {
        return '331';
    }

    public function unicodeName()
    {
        return 'Phags_Pa';
    }
}
