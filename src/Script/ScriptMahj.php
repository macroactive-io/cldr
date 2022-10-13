<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMahj - Representation of the Mahajani script.
 * @psalm-immutable
 */
class ScriptMahj extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mahj';
    }

    public function number(): string
    {
        return '314';
    }

    public function unicodeName(): string
    {
        return 'Mahajani';
    }
}
