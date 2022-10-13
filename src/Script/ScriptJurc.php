<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptJurc - Representation of the Jurchen script.
 */
class ScriptJurc extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Jurc';
    }

    public function number()
    {
        return '510';
    }
}
