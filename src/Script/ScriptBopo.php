<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Bopomofo
 *
 * @psalm-immutable
 */
class ScriptBopo extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Bopo';
    }

    public function number(): string
    {
        return '285';
    }

    public function unicodeName(): string
    {
        return 'Bopomofo';
    }
}
