<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptWole - Representation of the Woleai script.
 * @psalm-immutable
 */
class ScriptWole extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Wole';
    }

    public function number(): string
    {
        return '480';
    }
}
