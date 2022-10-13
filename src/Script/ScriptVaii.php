<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptVaii - Representation of the Vai script.
 */
class ScriptVaii extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Vaii';
    }

    public function numerals()
    {
        return ['꘠', '꘡', '꘢', '꘣', '꘤', '꘥', '꘦', '꘧', '꘨', '꘩'];
    }

    public function number()
    {
        return '470';
    }

    public function unicodeName()
    {
        return 'Vai';
    }
}
