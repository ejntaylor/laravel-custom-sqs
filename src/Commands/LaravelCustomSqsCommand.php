<?php

namespace Ejntaylor\LaravelCustomSqs\Commands;

use Illuminate\Console\Command;

class LaravelCustomSqsCommand extends Command
{
    public $signature = 'laravel-custom-sqs';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
