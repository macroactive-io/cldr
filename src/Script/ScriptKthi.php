<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Kaithi
 *
 * @psalm-immutable
 */
class ScriptKthi extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Kthi';
    }

    public function number(): string
    {
        return '317';
    }

    public function unicodeName(): string
    {
        return 'Kaithi';
    }
}
