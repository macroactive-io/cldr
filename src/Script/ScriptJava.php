<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptJava - Representation of the Javanese script.
 */
class ScriptJava extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Java';
    }

    public function numerals()
    {
        return ['꧐', '꧑', '꧒', '꧓', '꧔', '꧕', '꧖', '꧗', '꧘', '꧙'];
    }

    public function number()
    {
        return '361';
    }

    public function unicodeName()
    {
        return 'Javanese';
    }
}
