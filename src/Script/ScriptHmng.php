<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHmng - Representation of the Pahawh Hmong script.
 */
class ScriptHmng extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hmng';
    }

    public function number()
    {
        return '450';
    }

    public function unicodeName()
    {
        return 'Pahawh_Hmong';
    }
}
