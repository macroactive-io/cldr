<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Tangut
 *
 * @psalm-immutable
 */
class ScriptTang extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Tang';
    }

    public function number(): string
    {
        return '520';
    }

    public function unicodeName(): string
    {
        return 'Tangut';
    }
}
