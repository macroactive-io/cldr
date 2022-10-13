<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTfng - Representation of the Tifinagh script.
 */
class ScriptTfng extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Tfng';
    }

    public function number()
    {
        return '120';
    }

    public function unicodeName()
    {
        return 'Tifinagh';
    }
}
