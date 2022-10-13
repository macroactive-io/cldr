<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKhmr - Representation of the Khmer script.
 */
class ScriptKhmr extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Khmr';
    }

    public function numerals()
    {
        return ['០', '១', '២', '៣', '៤', '៥', '៦', '៧', '៨', '៩'];
    }

    public function number()
    {
        return '355';
    }

    public function unicodeName()
    {
        return 'Khmer';
    }
}
