<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptNshu - Representation of the Nüshu script.
 */
class ScriptNshu extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Nshu';
    }

    public function number()
    {
        return '499';
    }

    public function unicodeName()
    {
        return 'Nushu';
    }
}
