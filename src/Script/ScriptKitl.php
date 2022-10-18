<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Khitan large
 *
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
