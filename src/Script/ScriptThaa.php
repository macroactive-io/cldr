<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Thaana
 *
 * @psalm-immutable
 */
class ScriptThaa extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Thaa';
    }

    public function number(): string
    {
        return '170';
    }

    public function unicodeName(): string
    {
        return 'Thaana';
    }
}
