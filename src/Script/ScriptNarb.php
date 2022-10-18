<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Old North Arabian (Ancient North Arabian)
 *
 * @psalm-immutable
 */
class ScriptNarb extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Narb';
    }

    public function number(): string
    {
        return '106';
    }

    public function unicodeName(): string
    {
        return 'Old_North_Arabian';
    }
}
