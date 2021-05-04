<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait ExternalService
{
    /**
     * @param $url
     * @return array|mixed
     */
    public function getAllRequest( $url ) : array
    {
        $response = Http::withHeaders(['Content-Type' => 'application/vnd.api+json', 'Accept' => 'application/vnd.api+json']) -> get( $url, ['include' => request()->include] );
        return $response -> json();
    }

    /**
     * @param $url
     * @param $data
     * @return array|mixed
     */
    public function postRequest( $url, $data ) : array
    {
        $response = Http::withHeaders(['Content-Type' => 'application/vnd.api+json', 'Accept' => 'application/vnd.api+json']) -> post( $url, ['data' => $data -> data] );
        return $response -> json();
    }

    /**
     * @param $url
     * @return array|mixed
     */
    public function getRequest( $url ) : array
    {
        $response = Http::withHeaders(['Content-Type' => 'application/vnd.api+json', 'Accept' => 'application/vnd.api+json']) -> get( $url, ['include' => request()->include] );
        return $response -> json();
    }

    /**
     * @param $url
     * @param $data
     * @return array|mixed
     */
    public function putRequest( $url, $data ) : array
    {
        $response = Http::withHeaders(['Content-Type' => 'application/vnd.api+json', 'Accept' => 'application/vnd.api+json']) -> put( $url, ['data' => $data -> data] );
        return $response -> json();
    }

    /**
     * @param $url
     * @return array|mixed
     */
    public function deleteRequest( $url ) : array
    {
        $response = Http::withHeaders(['Content-Type' => 'application/vnd.api+json', 'Accept' => 'application/vnd.api+json']) -> delete( $url );
        return $response -> json();
    }

    /**
     * @param $url
     * @param $data
     * @return array|mixed
     */
    public function postWithFiles( $url, $data ) : array
    {
        $response = Http::withHeaders(['Content-Type' => 'application/vnd.api+json', 'Accept' => 'application/vnd.api+json']) -> post( $url, ['data' => $data] );
        return $response -> json();
    }
}
