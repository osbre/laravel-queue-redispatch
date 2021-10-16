<?php

namespace OstapBregin\LaravelQueueRedispatch;

interface RedispatchAfterFinished
{
    public function redispatch(): bool;
}
