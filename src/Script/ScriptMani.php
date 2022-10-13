<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMani - Representation of the Manichaean script.
 */
class ScriptMani extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Mani';
    }

    public function number()
    {
        return '139';
    }

    public function unicodeName()
    {
        return 'Manichaean';
    }
}
