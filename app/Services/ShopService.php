<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ShopService
{
    private $baseURL = "http://shops.juasoonline.test/shops/";

    /**
     * @return array|mixed
     */
    public function getAll()
    {
        $response = Http::withHeaders( [ 'Content-Type' => 'application/vnd.api+json', 'Accept' => 'application/vnd.api+json' ] ) -> get( $this -> baseURL, [ 'include' => request() ->include ] );
        return $response -> json();
    }

    /**
     * @param $theRequest
     * @return array|mixed
     */
    public function createShop( $theRequest )
    {
        $response = Http::withHeaders( [ 'Content-Type' => 'application/vnd.api+json', 'Accept' => 'application/vnd.api+json' ] ) -> post( $this -> baseURL, [ 'data' => $theRequest -> data ] );
        return $response -> json();
    }

    /**
     * @param $theShop
     * @return array|mixed
     */
    public function getShop( $theShop )
    {
        $response = Http::withHeaders( [ 'Content-Type' => 'application/vnd.api+json', 'Accept' => 'application/vnd.api+json' ] ) -> get( $this -> baseURL . $theShop, [ 'include' => request() ->include ] );
        return $response -> json();
    }

    /**
     * @param $theRequest
     * @param $theShop
     * @return array|mixed
     */
    public function updateShop( $theRequest, $theShop )
    {
        $response = Http::withHeaders( [ 'Content-Type' => 'application/vnd.api+json', 'Accept' => 'application/vnd.api+json' ] ) -> put( $this -> baseURL . $theShop, [ 'data' => $theRequest -> data ] );
        return $response -> json();
    }

    /**
     * @param $theShop
     * @return array|mixed
     */
    public function deleteShop( $theShop )
    {
        $response = Http::withHeaders( [ 'Content-Type' => 'application/vnd.api+json', 'Accept' => 'application/vnd.api+json' ] ) -> delete( $this -> baseURL . $theShop );
        return $response -> json();
    }
}
