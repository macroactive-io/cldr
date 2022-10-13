<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptYezi - Representation of the Yezidi script.
 */
class ScriptYezi extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Yezi';
    }

    public function number()
    {
        return '192';
    }

    public function unicodeName()
    {
        return 'Yezidi';
    }
}
