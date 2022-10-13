<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPhlv - Representation of the Book Pahlavi script.
 * @psalm-immutable
 */
class ScriptPhlv extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Phlv';
    }

    public function number(): string
    {
        return '133';
    }
}
