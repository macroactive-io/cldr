<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptChrs - Representation of the Chorasmian script.
 * @psalm-immutable
 */
class ScriptChrs extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Chrs';
    }

    public function number(): string
    {
        return '109';
    }

    public function unicodeName(): string
    {
        return 'Chorasmian';
    }
}
