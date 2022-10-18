<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Naxi Dongba
 *
 * @psalm-immutable
 */
class ScriptNkdb extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Nkdb';
    }

    public function number(): string
    {
        return '085';
    }
}
