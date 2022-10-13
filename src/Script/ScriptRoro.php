<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptRoro - Representation of the Rongorongo script.
 * @psalm-immutable
 */
class ScriptRoro extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Roro';
    }

    public function number(): string
    {
        return '620';
    }
}
