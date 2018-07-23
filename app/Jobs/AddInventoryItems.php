<?php

namespace KushyApi\Jobs;

use KushyApi\Inventory;
use KushyApi\Jobs\CreateBusinessActivity;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Auth;

class AddInventoryItems implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Inventory form request variables
     *
     * @var int $businessId
     * @var array $productIds
     */
    private $businessId;
    private $productIds;
    private $pricing;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($businessId, $productIds, $pricing = null)
    {
        $this->businessId = $businessId;
        $this->productIds = $productIds;
        $this->pricing = $pricing;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach($this->productIds as $product_id)
        {

            // check if product is already in inventory
            $productCheck = Inventory::where('business_id', $this->businessId)->where('product_id', $product_id);
            if(!$productCheck->first()) {
                // update business with new inventory
                $inventory = new Inventory;
                $inventory->product_id = $product_id;
                $inventory->business_id = $this->businessId;

                // Add any pricing
                $inventory->fill($this->pricing);
                
                $inventory->save();
                flash("Successfully added product to inventory")->success();

                /* Update business activity with new item */
                $userId = Auth::id();
                CreateBusinessActivity::dispatch($userId, $inventory->business_id, $inventory->product_id, 'inventory_add');
            } else {
                flash("Product already exists in inventory")->error();
            }
        }
    }
}
