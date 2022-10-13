<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKawi - Representation of the Kawi script.
 */
class ScriptKawi extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Kawi';
    }

    public function number()
    {
        return '368';
    }
}
