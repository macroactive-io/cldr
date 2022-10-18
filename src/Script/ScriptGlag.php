<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Glagolitic
 *
 * @psalm-immutable
 */
class ScriptGlag extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Glag';
    }

    public function number(): string
    {
        return '225';
    }

    public function unicodeName(): string
    {
        return 'Glagolitic';
    }
}
