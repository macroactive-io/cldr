<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptBuhd - Representation of the Buhid script.
 * @psalm-immutable
 */
class ScriptBuhd extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Buhd';
    }

    public function number(): string
    {
        return '372';
    }

    public function unicodeName(): string
    {
        return 'Buhid';
    }
}
