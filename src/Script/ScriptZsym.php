<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptZsym - Representation of the Symbols script.
 * @psalm-immutable
 */
class ScriptZsym extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Zsym';
    }

    public function number(): string
    {
        return '996';
    }
}
