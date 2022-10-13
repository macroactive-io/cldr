<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptNbat - Representation of the Nabataean script.
 */
class ScriptNbat extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Nbat';
    }

    public function number()
    {
        return '159';
    }

    public function unicodeName()
    {
        return 'Nabataean';
    }
}
