<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptSyrc - Representation of the Old Sogdian script.
 * @psalm-immutable
 */
class ScriptSogo extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sogo';
    }

    public function number(): string
    {
        return '142';
    }

    public function unicodeName(): string
    {
        return 'Old_Sogdian';
    }
}
