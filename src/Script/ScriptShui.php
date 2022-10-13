<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSyrc - Representation of the Shuishu script.
 */
class ScriptShui extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Shui';
    }

    public function number()
    {
        return '530';
    }
}
