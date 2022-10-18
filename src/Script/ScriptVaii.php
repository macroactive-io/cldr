<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptVaii - Representation of the Vai script.
 * @psalm-immutable
 */
class ScriptVaii extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Vaii';
    }

    public function numerals(): array
    {
        return ['꘠', '꘡', '꘢', '꘣', '꘤', '꘥', '꘦', '꘧', '꘨', '꘩'];
    }

    public function number(): string
    {
        return '470';
    }

    public function unicodeName(): string
    {
        return 'Vai';
    }
}
