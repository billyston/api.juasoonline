<?php

namespace App\Repositories\OrderService\Customer;

use App\Http\Requests\OrderService\Customer\CustomerRegistrationRequest;
use App\Http\Requests\OrderService\Customer\CustomerRequest;
use App\Models\OrderService\Customer\Customer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

interface CustomerRepositoryInterface
{
    /**
     * @return array|mixed
     */
    public function index(): array;

    /**
     * @param CustomerRequest $customerRequest
     * @return array|mixed
     */
    public function store( CustomerRequest $customerRequest ): array;

    /**
     * @param $theCustomer
     * @return array|mixed
     */
    public function show( $theCustomer ): array;

    /**
     * @param CustomerRequest $customerRequest
     * @param $theCustomer
     * @return array|mixed
     */
    public function update( $theCustomer, CustomerRequest $customerRequest ): array;

    /**
     * @param $theCustomer
     * @return array|mixed
     */
    public function destroy( $theCustomer ): array;

    /**
     * @param CustomerRegistrationRequest $customerRegistrationRequest
     * @return JsonResponse
     */
    public function registration( CustomerRegistrationRequest $customerRegistrationRequest ) : JsonResponse;
}
