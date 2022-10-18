<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Egyptian demotic
 *
 * @psalm-immutable
 */
class ScriptEgyd extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Egyd';
    }

    public function number(): string
    {
        return '070';
    }
}
