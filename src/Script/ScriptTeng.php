<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTeng - Representation of the Tengwar script.
 * @psalm-immutable
 */
class ScriptTeng extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Teng';
    }

    public function number(): string
    {
        return '290';
    }
}
