<?php

namespace App\Jobs;

use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use App\Repositories\RequestProductRepository;
use App\Services\Category\CategoryService;
use App\Services\Product\ProductService;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessProductsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     * @throws GuzzleException
     */
    public function handle(): void
    {
        (new ProductService(new ProductRepository(), new RequestProductRepository()))
            ->processingProducts();
    }
}
