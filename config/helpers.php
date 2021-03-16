<?php

use Illuminate\Support\Facades\DB;

/**
 * @return array
 */
function includeResources()
{
    return ( request() -> get( 'include' ) ) ? explode( ',', request() -> get( 'include' ) ) : [];
}

/**
 * Generate unique shipment ID
 *
 * @param int $length
 *
 * @return string
 */
function generateVerificationCode( $length )
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


