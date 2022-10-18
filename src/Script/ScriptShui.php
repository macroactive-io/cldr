<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptSyrc - Representation of the Shuishu script.
 * @psalm-immutable
 */
class ScriptShui extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Shui';
    }

    public function number(): string
    {
        return '530';
    }
}
