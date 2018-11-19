<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Product;

class ImportProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import-products:csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import products from a csv file';

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
        
        // $file = fopen('storage/app/public/csv files/testeImport.csv', 'r');
        // $all_data = array();
        // $cont = 1;
        // while(($data = fgetcsv($file, 200000, ",")) !== FALSE){
            

        //     $product = new Product();
        //     $product->name = $data[0];
        //     $product->subname = $data[1];
        //     $product->price = (int) $data[2];
        //     $product->description = $data[3];

        //     $product->save();
            
        // }

        $filesInPublic = \File::files('storage/app/public/csv files/not imported');

        foreach($filesInPublic as $file){
            $file = pathinfo($file);
            $openFile = fopen('storage/app/public/csv files/not imported/'.$file['filename'].'.csv', 'r');

            while(($data = fgetcsv($openFile, 200000, ",")) !== FALSE){

                $product = new Product();
                $product->name = $data[0];
                $product->subname = $data[1];
                $product->price = (int) $data[2];
                $product->description = $data[3];

                $product->save();
            }

            rename('storage/app/public/csv files/not imported/'.$file['filename'].'.csv', 'storage/app/public/csv files/imported/'.$file['filename'].'.csv');
        }

        $this->info('Your import was completed!');
    }
}
