<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBass - Representation of the Bassa Vah script.
 */
class ScriptBass extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Bass';
    }

    public function number()
    {
        return '259';
    }

    public function unicodeName()
    {
        return 'Bassa_Vah';
    }
}
