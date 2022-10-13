<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSylo - Representation of the Syloti Nagri script.
 * @psalm-immutable
 */
class ScriptSylo extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sylo';
    }

    public function number(): string
    {
        return '316';
    }

    public function unicodeName(): string
    {
        return 'Syloti_Nagri';
    }
}
