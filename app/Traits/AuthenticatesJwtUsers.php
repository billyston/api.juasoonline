<?php

namespace App\Traits;

use App\Http\Requests\UserLoginRequest;
use App\Http\Resources\ProductService\Store\StoreAdministratorResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

trait AuthenticatesJwtUsers
{
    private $guard_name = null;
    use apiResponseBuilder;

    /**
     * @param UserLoginRequest $userLoginRequest
     * @return JsonResponse
     */
    public function login( UserLoginRequest $userLoginRequest ) : JsonResponse
    {
        $token = guard( $this -> guard_name ) -> attempt( $userLoginRequest -> validated() ['data']['attributes'] );
        if ( $token ) { return $this -> respondWithToken( $token, $this -> getResource() ); }
        return $this -> errorResponse ( null, "Failed", "Authentication failed", Response::HTTP_UNAUTHORIZED );
    }

    /**
     * @param string $token
     * @param array $resource
     * @return JsonResponse
     */
    public function respondWithToken( string $token, array $resource ) : JsonResponse
    {
        $resource[ 'data' ] = array_merge
        (
            $resource[ 'data' ],
            [
                'token' =>
                [
                    'token_type' => 'bearer',
                    'expires' => guard( $this -> guard_name ) -> factory() -> getTTL() * 100000,
                    'access_token' => $token
                ]
            ]
        );
        return response() -> json( $resource, 200 );
    }

    /**
     * Get the authenticated UserResource.
     * @return JsonResponse
     */
    public function me() : JsonResponse
    {
        return response() -> json( guard( $this -> guard_name ) -> user() );
    }

    /**
     * Refresh a token.
     * @return JsonResponse
     */
    public function refresh() : JsonResponse
    {
        return $this -> respondWithToken( guard( $this -> guard_name ) -> refresh(), $this -> getResource() );
    }

    /**
     * Log the user out (Invalidate the token).
     * @return JsonResponse
     */
    public function logout() : JsonResponse
    {
        guard( $this -> guard_name ) -> logout();
        return $this -> successResponse ( null, "Success", "Logged out", Response::HTTP_OK );
    }

    /**
     * @param string|null $name
     * @return string
     */
    public function setGuardName( string $name = null ) : string
    {
        return $this -> guard_name = $name;
    }

    /**
     * @param Request $request
     * @return JsonResponse|void
     */
    public function changePassword( Request $request ) : JsonResponse
    {
        $validator = Validator::make( $request -> all(),
            [
                'password' => 'required|min:6|confirmed'
            ]);

        if ( $validator -> fails() )
        {
            return failedValidationResponse( $validator -> errors() -> all() );
        }

        try
        {
            guard( $this -> guard_name ) -> user() -> first() -> update
            ([
                'password' => $request -> input( 'password' )
            ]);
        }
        catch ( Exception $exception )
        {
            report( $exception );
            return errorResponse();
        }

        return successResponse( 'password changed!' );
    }

    /**
     * @return array|mixed
     */
    public function getResource() : array
    {
        $user = auth( $this -> guard_name ) -> user();
        if ( $this -> guard_name === 'store_administrator' ) { return [ 'data' => ( new StoreAdministratorResource( $user ) ) -> toArray( request() ) ]; }
    }
}
