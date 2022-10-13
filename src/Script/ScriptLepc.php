<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLepc - Representation of the Lepcha (Róng) script.
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
