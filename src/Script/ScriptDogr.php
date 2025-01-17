<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Dogra
 *
 * @psalm-immutable
 */
class ScriptDogr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Dogr';
    }

    public function number(): string
    {
        return '328';
    }

    public function unicodeName(): string
    {
        return 'Dogra';
    }
}
