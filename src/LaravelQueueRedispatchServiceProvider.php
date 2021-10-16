<?php

namespace OstapBregin\LaravelQueueRedispatch;

use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\ServiceProvider;

class LaravelQueueRedispatchServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Queue::after(function (JobProcessed $event) {
            if (!($event->job instanceof RedispatchAfterFinished)) {
                return;
            }

            if (!$event->job->redispatch()) {
                return;
            }

            $payload = $event->job->payload();

            if ($event->job instanceof RedispatchWithDifferentPayload) {
                $payload = $event->job->redispatchPayload();
            }

            dispatch(new $event->job($payload));
        });
    }
}
