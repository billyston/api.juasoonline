<?php

use Illuminate\Contracts\Auth\Factory;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\DB;

/**
 * @return array
 */
function includeResources() : array
{
    return ( request() -> get( 'include' ) ) ? explode( ',', request() -> get( 'include' ) ) : [];
}

/**
 * Generate unique shipment ID
 * @param int $length
 * @return string
 */
function generateVerificationCode( int $length ) : string
{
    $number = '';

    do {
        for ( $i = $length; $i --; $i > 0 )
        {
            $number .= mt_rand(0,9);
        }
    } while ( !empty( DB::table( 'store_administrators' ) -> where( 'verification_code', $number ) -> first([ 'verification_code' ])) );

    return $number;
}

/**
 * @param string|null $guard
 * @return Factory|Guard|StatefulGuard|Application
 */
function guard ( string $guard = null )
{
    return auth( $guard );
}


