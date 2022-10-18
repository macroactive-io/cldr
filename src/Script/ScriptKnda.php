<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptKnda - Representation of the Kannada script.
 * @psalm-immutable
 */
class ScriptKnda extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Knda';
    }

    public function numerals(): array
    {
        return ['೦', '೧', '೨', '೩', '೪', '೫', '೬', '೭', '೮', '೯'];
    }

    public function number(): string
    {
        return '345';
    }

    public function unicodeName(): string
    {
        return 'Kannada';
    }
}
