<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptDupl - Representation of the Duployan shorthand, Duployan stenography script.
 */
class ScriptDupl extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Dupl';
    }

    public function number()
    {
        return '755';
    }

    public function unicodeName()
    {
        return 'Duployan';
    }
}
