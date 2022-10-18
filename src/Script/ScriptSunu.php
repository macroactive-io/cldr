<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Sunuwar
 *
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
