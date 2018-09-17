<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetCredit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reset:credit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Credit reset every month';

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
     * @return mixed
     */
    public function handle()
    {
      \DB::table('users')->where('status', 'reguler')->update(['credit' => 20]);
      \DB::table('users')->where('status', 'premium')->update(['credit' => 40]);

      $this->info('reset successfully');
    }
}
