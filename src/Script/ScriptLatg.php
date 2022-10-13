<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLatg - Representation of the Latin (Gaelic variant) script.
 * @psalm-immutable
 */
class ScriptLatg extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Latg';
    }

    public function number(): string
    {
        return '216';
    }
}
