<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptCprt - Representation of the Cypriot script.
 * @psalm-immutable
 */
class ScriptCprt extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cprt';
    }

    public function number(): string
    {
        return '403';
    }

    public function unicodeName(): string
    {
        return 'Cypriot';
    }
}
