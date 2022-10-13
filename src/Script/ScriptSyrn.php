<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSyrn - Representation of the Syriac (Eastern variant) script.
 * @psalm-immutable
 */
class ScriptSyrn extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Syrn';
    }

    public function number(): string
    {
        return '136';
    }
}
