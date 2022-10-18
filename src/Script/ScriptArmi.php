<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Imperial Aramaic
 *
 * @psalm-immutable
 */
class ScriptArmi extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Armi';
    }

    public function number(): string
    {
        return '124';
    }

    public function unicodeName(): string
    {
        return 'Imperial_Aramaic';
    }
}
