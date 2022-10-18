<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptLatf - Representation of the Latin (Fraktur variant) script.
 * @psalm-immutable
 */
class ScriptLatf extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Latf';
    }

    public function number(): string
    {
        return '217';
    }
}
