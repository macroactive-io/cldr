<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPhlv - Representation of the Book Pahlavi script.
 */
class ScriptPhlv extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Phlv';
    }

    public function number()
    {
        return '133';
    }
}
