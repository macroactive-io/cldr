<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptNagm - Representation of the Nag Mundari script.
 * @psalm-immutable
 */
class ScriptNagm extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Nagm';
    }

    public function number(): string
    {
        return '295';
    }
}
