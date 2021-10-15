<?php

namespace OstapBregin\LaravelQueueLoop;

interface RedispatchAfterFinished
{
    public function redispatch(): bool;
}
