<?php

namespace App\Console\Commands;

use App\Events\OrderStatusWasChanged;
use App\Models\Order;
use Illuminate\Console\Command;

class ChangeOrderStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:status {status}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Order Status';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Order::first()->update([
            'status' => $this->argument('status')
        ]);

        event(new OrderStatusWasChanged);

        $this->info("Change order status to {$this->argument('status')} success!");

        return Command::SUCCESS;
    }
}
