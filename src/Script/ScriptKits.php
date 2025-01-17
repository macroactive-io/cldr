<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Khitan small
 *
 * @psalm-immutable
 */
class ScriptKits extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Kits';
    }

    public function number(): string
    {
        return '288';
    }

    public function unicodeName(): string
    {
        return 'Khitan_Small_Script';
    }
}
