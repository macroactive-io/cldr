<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptMtei - Representation of the Meitei Mayek (Meithei, Meetei) script.
 * @psalm-immutable
 */
class ScriptMtei extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mtei';
    }

    public function numerals(): array
    {
        return ['꯰', '꯱', '꯲', '꯳', '꯴', '꯵', '꯶', '꯷', '꯸', '꯹'];
    }

    public function number(): string
    {
        return '337';
    }

    public function unicodeName(): string
    {
        return 'Meetei_Mayek';
    }
}
