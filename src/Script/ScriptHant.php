<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Traditional Han
 *
 * @psalm-immutable
 */
class ScriptHant extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hant';
    }

    public function number(): string
    {
        return '502';
    }
}
