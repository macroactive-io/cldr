<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptOrya - Representation of the Oriya script.
 */
class ScriptOrya extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Orya';
    }

    public function numerals()
    {
        return ['୦', '୧', '୨', '୩', '୪', '୫', '୬', '୭', '୮', '୯'];
    }

    public function number()
    {
        return '327';
    }

    public function unicodeName()
    {
        return 'Oriya';
    }
}
