<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Gothic
 *
 * @psalm-immutable
 */
class ScriptGoth extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Goth';
    }

    public function number(): string
    {
        return '206';
    }

    public function unicodeName(): string
    {
        return 'Gothic';
    }
}
