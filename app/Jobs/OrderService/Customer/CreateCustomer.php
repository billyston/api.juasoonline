<?php

namespace App\Jobs\OrderService\Customer;

use App\Http\Requests\OrderService\Customer\CustomerRegistrationRequest;
use App\Http\Resources\OrderService\Customer\CustomerResource;
use App\Models\OrderService\Customer\Customer;
use App\Traits\apiResponseBuilder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Exception;

class CreateCustomer implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, apiResponseBuilder;
    private $theRequest;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( CustomerRegistrationRequest $customerRegistrationRequest )
    {
        $this -> theRequest = $customerRegistrationRequest;
    }

    /**
     * Execute the job.
     * @return CustomerResource|mixed
     */
    public function handle() : CustomerResource
    {
        try
        {
            $Customer = new Customer( $this -> theRequest -> input( 'data.attributes' ) );
            $Customer -> save();

            $Customer -> refresh();
            return ( new CustomerResource( $Customer ) );
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return abort( $this -> errorResponse( null, 'Error', 'Something went wrong, please try again later', Response::HTTP_SERVICE_UNAVAILABLE ) );
        }
    }
}
