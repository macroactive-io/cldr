<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptInds - Representation of the Indus (Harappan) script.
 * @psalm-immutable
 */
class ScriptInds extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Inds';
    }

    public function number(): string
    {
        return '610';
    }
}
