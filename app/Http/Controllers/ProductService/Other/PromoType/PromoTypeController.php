<?php

namespace App\Http\Controllers\ProductService\Other\PromoType;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\Other\PromoType\PromoTypeRequest;
use App\Repositories\ProductService\Other\PromoType\PromoTypeRepositoryInterface;

class PromoTypeController extends Controller
{
    private $theRepository;

    public function __construct( PromoTypeRepositoryInterface $promoTypeRepository )
    {
        $this -> theRepository = $promoTypeRepository;
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
     * Store a newly created resource in storage.
     *
     * @param PromoTypeRequest $promoTypeRequest
     * @return array|mixed
     */
    public function store( PromoTypeRequest $promoTypeRequest ) : array
    {
        return $this -> theRepository -> store( $promoTypeRequest );
    }

    /**
     * Display the specified resource.
     *
     * @param $PromoType
     * @return array|mixed
     */
    public function show( $PromoType ) : array
    {
        return $this -> theRepository -> show( $PromoType );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PromoTypeRequest $promoTypeRequest
     * @param $PromoType
     * @return array|mixed
     */
    public function update( PromoTypeRequest $promoTypeRequest, $PromoType ) : array
    {
        return $this -> theRepository -> update( $promoTypeRequest, $PromoType );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $PromoType
     * @return array|mixed
     */
    public function destroy( $PromoType ) : array
    {
        return $this -> theRepository -> destroy( $PromoType );
    }
}
