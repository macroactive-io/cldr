<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCpmn - Representation of the Elymaic script.
 */
class ScriptElym extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Elym';
    }

    public function number()
    {
        return '128';
    }

    public function unicodeName()
    {
        return 'Elymaic';
    }
}
