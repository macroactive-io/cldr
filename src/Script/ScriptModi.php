<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Modi, Moḍī
 *
 * @psalm-immutable
 */
class ScriptModi extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Modi';
    }

    public function number(): string
    {
        return '324';
    }

    public function unicodeName(): string
    {
        return 'Modi';
    }
}
