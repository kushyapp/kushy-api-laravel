<?php

namespace KushyApi\Jobs;

use KushyApi\User;
use KushyApi\UsersPermissions;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Hash;

class InviteEmployee implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Employee information
     *
     * @var id      $businessId
     * @var string  $employeeName
     * @var string  $employeeEmail
     * @var string  $employeeType
     */
    private $businessId;
    private $employeeName;
    private $employeeEmail;
    private $employeeType;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($employeeName, $employeeEmail, $employeeType, $businessId)
    {
        $this->employeeName = $employeeName; 
        $this->employeeEmail = $employeeEmail;
        $this->employeeType = $employeeType;
        $this->businessId = $businessId; 
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {   

        /**
         * Check if user exists
         */

        $userCheck = User::where('email', $this->employeeEmail)->first();

        if($userCheck) {
            EmailNewStaff::dispatch($userCheck, $this->businessId);
        } else {

            /**
             * Create random password
             */
            $hashPassword = Hash::make(str_random(8));
            $hashInvite = Hash::make(str_random(12));
            

            /** 
             * Create new user
             */
            $user = User::create([
                'name' => $this->employeeName,
                'email' => $this->employeeEmail,
                'password' => $hashPassword,
                'invite' => $hashInvite,
            ]);


            $userModel = User::find($user)->first();

            /**
             * Add the new user to the user permission table
             */
            $newEmployee = UsersPermissions::create([
                'business_id' => $this->businessId,
                'user_id' => $userModel->id,
                'verified' => false,
                'user_type' => $this->employeeType,
            ]);

            /**
             * Send email to new staff with random password + invite link
             */
            EmailNewStaff::dispatch($userModel, $this->businessId, $hashPassword, $hashInvite);

        }
        
    }
}
