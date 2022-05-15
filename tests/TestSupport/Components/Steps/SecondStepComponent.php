<?php

namespace Spatie\LivewireWizard\Tests\TestSupport\Components\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class SecondStepComponent extends StepComponent
{
    public function render()
    {
        return <<<'blade'
            <div>
            Second step.
            </div>
        blade;
    }
}
