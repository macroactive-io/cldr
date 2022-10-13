<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKnda - Representation of the Kannada script.
 */
class ScriptKnda extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Knda';
    }

    public function numerals()
    {
        return ['೦', '೧', '೨', '೩', '೪', '೫', '೬', '೭', '೮', '೯'];
    }

    public function number()
    {
        return '345';
    }

    public function unicodeName()
    {
        return 'Kannada';
    }
}
