<?php

namespace Reatang\LaravelBundle\Commands;

use Illuminate\Console\Command;

class SomeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel-bundle:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For Example';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->line(trans('bundle_name::message.Hello Laravel Bundle', ['name' => 'console']));

        return 0;
    }
}
