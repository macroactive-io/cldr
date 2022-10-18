<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Khudawadi, Sindhi
 *
 * @psalm-immutable
 */
class ScriptSind extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sind';
    }

    public function number(): string
    {
        return '318';
    }

    public function unicodeName(): string
    {
        return 'Khudawadi';
    }
}
