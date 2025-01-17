<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Cham
 *
 * @psalm-immutable
 */
class ScriptCham extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Cham';
    }

    public function numerals(): array
    {
        return ['꩐', '꩑', '꩒', '꩓', '꩔', '꩕', '꩖', '꩗', '꩘', '꩙'];
    }

    public function number(): string
    {
        return '358';
    }

    public function unicodeName(): string
    {
        return 'Cham';
    }
}
