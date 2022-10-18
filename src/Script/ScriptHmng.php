<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Pahawh Hmong
 *
 * @psalm-immutable
 */
class ScriptHmng extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hmng';
    }

    public function number(): string
    {
        return '450';
    }

    public function unicodeName(): string
    {
        return 'Pahawh_Hmong';
    }
}
