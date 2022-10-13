<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPcun - Representation of the Proto Cuneiform script.
 */
class ScriptPcun extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Pcun';
    }

    public function number()
    {
        return '015';
    }
}
