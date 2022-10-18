<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptPhag - Representation of the Phags-pa script.
 * @psalm-immutable
 */
class ScriptPhag extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Phag';
    }

    public function number(): string
    {
        return '331';
    }

    public function unicodeName(): string
    {
        return 'Phags_Pa';
    }
}
