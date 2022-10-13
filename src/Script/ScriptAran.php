<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptAran - Representation of the Arabic (Nastaliq) script.
 */
class ScriptAran extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Aran';
    }

    public function number()
    {
        return '161';
    }
}
