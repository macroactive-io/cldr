<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptKore - Representation of the Korean (alias for Hangul + Han) script.
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
