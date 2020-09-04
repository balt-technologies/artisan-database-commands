<?php

use Illuminate\Console\Command;

class DatabaseConfigurationCommand extends Command
{
    protected $signature = 'dbc:config';

    protected $description = 'Show all configurations for current environment';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('test');
    }

}