<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Old Permic
 *
 * @psalm-immutable
 */
class ScriptPerm extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Perm';
    }

    public function number(): string
    {
        return '227';
    }

    public function unicodeName(): string
    {
        return 'Old_Permic';
    }
}
