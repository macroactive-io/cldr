<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSarb - Representation of the Old South Arabian script.
 * @psalm-immutable
 */
class ScriptSarb extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sarb';
    }

    public function number(): string
    {
        return '105';
    }

    public function unicodeName(): string
    {
        return 'Old_South_Arabian';
    }
}
