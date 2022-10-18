<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Indus (Harappan)
 *
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
