<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class complicadovet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:complicadovet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $table = $this->argument('animal', 'cliente');

        

        return $this->showTableDetails($table);
    }
    

    protected function showTableDetails($table)
    {
        $columns = \Illuminate\Support\Facades\DB::select("DESC {$table}");

        $headers = [
            'Field', 'Type', 'Null', 'Key', 'Default',
        ];

        $rows = collect($columns)->map(function ($column) {
            return get_object_vars($column);
        });
        

        return $this->table($headers, $rows);
    }
}
