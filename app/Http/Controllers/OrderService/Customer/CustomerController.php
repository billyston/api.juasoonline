<?php

namespace App\Http\Controllers\OrderService\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderService\Customer\CustomerRegistrationRequest;
use App\Http\Requests\OrderService\Customer\CustomerRequest;
use App\Repositories\OrderService\Customer\CustomerRepositoryInterface;
use App\Traits\AuthenticatesJwtUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $theRepository; use AuthenticatesJwtUsers;

    /**
     * CustomerController constructor.
     * @param CustomerRepositoryInterface $customerRepository
     */
    public function __construct( CustomerRepositoryInterface $customerRepository )
    {
        $this -> theRepository = $customerRepository;
        $this -> setGuardName('customer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return array|mixed
     */
    public function index() : array
    {
        return $this -> theRepository -> index();
    }

    /**
     * @param CustomerRequest $customerRequest
     * @return array|mixed
     */
    public function store( CustomerRequest $customerRequest  ) : array
    {
        return $this -> theRepository -> store( $customerRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param $theCustomer
     * @return array|mixed
     */
    public function show( $theCustomer ) : array
    {
        return $this -> theRepository -> show( $theCustomer );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $theCustomer
     * @param CustomerRequest $customerRequest
     * @return array|mixed
     */
    public function update( $theCustomer, CustomerRequest $customerRequest ) : array
    {
        return $this -> theRepository -> update( $theCustomer, $customerRequest );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $theCustomer
     * @return array|mixed
     */
    public function destroy( $theCustomer ) : array
    {
        return $this -> theRepository -> destroy( $theCustomer );
    }

    public function verification( Request $request ) : JsonResponse
    {
        $request -> validate([
            'data'                                      => ['required'],
            'data.type'                                 => ['required', 'string', 'in:Customer'],

            'data.attributes.email'                     => ['required', 'email', 'exists:customers,email'],
            'data.attributes.verification_code'         => ['required', 'exists:customers,verification_code'],
        ],
        [
            'data.attributes.email.required'            => "The email is required",
            'data.attributes.email.email'               => "The email address is invalid",
            'data.attributes.email.exists'              => "The email address does not exist",
        ]);
        return $this -> theRepository -> verification( $request );
    }

    /**
     * Store a newly created resource in storage.
     * @param CustomerRegistrationRequest $customerRegistrationRequest
     * @return JsonResponse|mixed
     */
//    public function registration( CustomerRegistrationRequest $customerRegistrationRequest ) : JsonResponse
//    {
//       return $this -> theRepository -> registration( $customerRegistrationRequest );
//    }
}
