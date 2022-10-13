<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTalu - Representation of the New Tai Lue script.
 * @psalm-immutable
 */
class ScriptTalu extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Talu';
    }

    public function numerals(): array
    {
        return ['᧐', '᧑', '᧒', '᧓', '᧔', '᧕', '᧖', '᧗', '᧘', '᧙'];
    }

    public function number(): string
    {
        return '354';
    }

    public function unicodeName(): string
    {
        return 'New_Tai_Lue';
    }
}
