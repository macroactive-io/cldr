<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptSunu - Representation of the Sunuwar script.
 * @psalm-immutable
 */
class ScriptSunu extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sunu';
    }

    public function number(): string
    {
        return '274';
    }
}
