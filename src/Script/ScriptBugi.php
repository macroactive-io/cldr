<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBugi - Representation of the Buginese script.
 */
class ScriptBugi extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Bugi';
    }

    public function number()
    {
        return '367';
    }

    public function unicodeName()
    {
        return 'Buginese';
    }
}
