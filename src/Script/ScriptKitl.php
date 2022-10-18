<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptKitl - Representation of the Khitan large script.
 * @psalm-immutable
 */
class ScriptKitl extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Kitl';
    }

    public function number(): string
    {
        return '505';
    }
}
