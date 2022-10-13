<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptThaa - Representation of the Thaana script.
 */
class ScriptThaa extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Thaa';
    }

    public function number()
    {
        return '170';
    }

    public function unicodeName()
    {
        return 'Thaana';
    }
}
