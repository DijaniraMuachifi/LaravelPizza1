<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use Carbon\Carbon;

class ImportOrdersFromTxt extends Command
{
    protected $signature = 'import:orders {file}';
    protected $description = 'Import orders from a txt file';

    public function handle()
    {
        $file = $this->argument('file');

        if (!file_exists($file)) {
            $this->error("File not found: $file");
            return 1;
        }

        $handle = fopen($file, "r");

        // Pular a primeira linha (cabeçalho)
        fgets($handle);

        $count = 0;
        while (($line = fgets($handle)) !== false) {
            $data = explode("\t", trim($line));

            if (count($data) != 4) continue;

            $order = new Order();
            $order->pizzaname = $data[0];
            $order->amount = floatval($data[1]);
            $order->taken = Carbon::createFromFormat('Y.m.d H:i:s', $data[2]);
            $order->dispatched = Carbon::createFromFormat('Y.m.d H:i:s', $data[3]);
            $order->save();

            $count++;

            if ($count % 100 == 0) {
                $this->info("Imported $count orders...");
            }
        }

        fclose($handle);

        $this->info("Import completed. Total orders imported: $count");
    }
}