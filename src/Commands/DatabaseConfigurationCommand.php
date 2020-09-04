<?php

use Illuminate\Console\Command;

class DatabaseConfigurationCommand extends Command
{
    protected $signature = 'dbc:config';

    protected $description = 'Show all configurations for current environment';

    public function handle()
    {
        $connections = config('database.connections');

        $connectionKeys = array_keys($connections);

        $connection = $this->choice('Which connection you want to see?', $connectionKeys);

        $this->info('You choosed: '. $connection);

    }
}