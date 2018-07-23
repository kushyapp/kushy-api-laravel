<?php

namespace KushyApi\Jobs;

use KushyApi\UserActivity;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateBusinessActivity implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * A business ID, the item, and the associated action 
     * (actions: add inventory / create coupon / etc)
     * 
     * Actions
     *   - inventory_add    = Added inventory item
     *   - inventory_edit   = Edited inventory item
     *   - employee_add     = Added employee
     *   - employee_edit    = Edited employee
     *   - review_flag      = Flagged review and hid from profile
     *
     * @var int $userId
     * @var int $businessId
     * @var int $itemId
     * @var string $action
     */
    private $userId;
    private $businessId;
    private $itemId;
    private $action;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($userId, $businessId, $itemId, $action)
    {
        $this->userId = $userId;
        $this->businessId = $businessId;
        $this->itemId = $itemId;
        $this->action = $action;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $newBusinessStatus = new UserActivity;
        $newBusinessStatus->user_id = $this->userId;
        $newBusinessStatus->post_id = $this->businessId;
        $newBusinessStatus->item_id = $this->itemId;
        $newBusinessStatus->section = $this->action;
        
        $newBusinessStatus->save();
    }
}
