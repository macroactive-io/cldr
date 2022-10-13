<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptShaw - Representation of the Shavian (Shaw) script.
 * @psalm-immutable
 */
class ScriptShaw extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Shaw';
    }

    public function number(): string
    {
        return '281';
    }

    public function unicodeName(): string
    {
        return 'Shavian';
    }
}
