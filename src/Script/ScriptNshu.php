<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Nüshu
 *
 * @psalm-immutable
 */
class ScriptNshu extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Nshu';
    }

    public function number(): string
    {
        return '499';
    }

    public function unicodeName(): string
    {
        return 'Nushu';
    }
}
