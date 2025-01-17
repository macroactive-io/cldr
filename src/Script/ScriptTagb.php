<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Tagbanwa
 *
 * @psalm-immutable
 */
class ScriptTagb extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Tagb';
    }

    public function number(): string
    {
        return '373';
    }

    public function unicodeName(): string
    {
        return 'Tagbanwa';
    }
}
