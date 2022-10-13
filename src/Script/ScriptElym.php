<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCpmn - Representation of the Elymaic script.
 * @psalm-immutable
 */
class ScriptElym extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Elym';
    }

    public function number(): string
    {
        return '128';
    }

    public function unicodeName(): string
    {
        return 'Elymaic';
    }
}
