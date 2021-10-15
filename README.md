## Automatically re-dispatch queue job after it has been finished

```php
use OstapBregin\LaravelQueueLoop\RedispatchAfterFinished;

class ProceedNewNotionPostsJob implements ..., RedispatchAfterFinished
{
    ...

    public function redispatch(): bool
    {
        return true;
    }

    ...
}

```
