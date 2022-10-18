<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptSinh - Representation of the Sinhala script.
 * @psalm-immutable
 */
class ScriptSinh extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Sinh';
    }

    public function number(): string
    {
        return '348';
    }

    public function unicodeName(): string
    {
        return 'Sinhala';
    }
}
