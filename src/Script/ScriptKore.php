<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Korean (alias for Hangul + Han)
 *
 * @psalm-immutable
 */
class ScriptKore extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Kore';
    }

    public function number(): string
    {
        return '287';
    }
}
