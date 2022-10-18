<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptTfng - Representation of the Tifinagh script.
 * @psalm-immutable
 */
class ScriptTfng extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Tfng';
    }

    public function number(): string
    {
        return '120';
    }

    public function unicodeName(): string
    {
        return 'Tifinagh';
    }
}
