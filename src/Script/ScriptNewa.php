<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptNewa - Representation of the Newa script.
 * @psalm-immutable
 */
class ScriptNewa extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Newa';
    }

    public function number(): string
    {
        return '333';
    }

    public function unicodeName(): string
    {
        return 'Newa';
    }
}
