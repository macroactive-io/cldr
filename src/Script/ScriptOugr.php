<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptOugr - Representation of the Old Uyghur script.
 */
class ScriptOugr extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Ougr';
    }

    public function number()
    {
        return '143';
    }

    public function unicodeName()
    {
        return 'Old_Uyghur';
    }
}
