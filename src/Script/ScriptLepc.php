<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Lepcha (Róng)
 *
 * @psalm-immutable
 */
class ScriptLepc extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Lepc';
    }

    public function numerals(): array
    {
        return ['᱀', '᱁', '᱂', '᱃', '᱄', '᱅', '᱆', '᱇', '᱈', '᱉'];
    }

    public function number(): string
    {
        return '335';
    }

    public function unicodeName(): string
    {
        return 'Lepcha';
    }
}
