## Automatically re-dispatch queue job after it has been finished

## Introduction



## Usage

```php
use OstapBregin\LaravelQueueRedispatch\RedispatchAfterFinished;

class CheckWebsiteUptime implements ..., RedispatchAfterFinished
{
    ...

    public function redispatch(): bool
    {
        return $this->website->monitoring_enabled;
    }

    ...
}

```
