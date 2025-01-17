<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Hangul
 *
 * @psalm-immutable
 */
class ScriptHang extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hang';
    }

    public function number(): string
    {
        return '286';
    }

    public function unicodeName(): string
    {
        return 'Hangul';
    }
}
