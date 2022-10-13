<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptXsux - Representation of the Cuneiform, Sumero-Akkadian script.
 * @psalm-immutable
 */
class ScriptXsux extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Xsux';
    }

    public function number(): string
    {
        return '020';
    }

    public function unicodeName(): string
    {
        return 'Cuneiform';
    }
}
