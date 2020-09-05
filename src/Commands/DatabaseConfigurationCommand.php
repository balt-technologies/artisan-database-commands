<?php

namespace Balt\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class DatabaseConfigurationCommand extends Command
{
    protected $signature = 'dbc:config';

    protected $description = 'Show all configurations for current environment';

    // @todo: Mask passwords might be a good idea
    public function handle()
    {
        $connections = config('database.connections');

        $connectionKeys = array_keys($connections);

        $connection = $this->choice('Which connection you want to inspect?', $connectionKeys);

        $this->info('Showing config for: '. Str::upper($connection));

        foreach($connections[$connection] as $key => $value) {
            // @todo: we might need a recursive printer
            if (is_array($value)) {
                $this->info($key.': ');

                foreach($value as $k => $v) {
                    $this->info('  - '. $k .': '. $v);
                }
            } else {
                $this->info($key .': '. $value);
            }
        }
    }
}