<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCirt - Representation of the Cirth script.
 * @psalm-immutable
 */
class ScriptCirt extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cirt';
    }

    public function number(): string
    {
        return '291';
    }
}
