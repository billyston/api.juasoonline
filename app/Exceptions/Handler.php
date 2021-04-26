<?php

namespace App\Exceptions;

use App\Traits\apiResponseBuilder;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    use apiResponseBuilder;

    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * @param Request $request
     * @param Throwable $exception
     * @return JsonResponse|Response|\Symfony\Component\HttpFoundation\Response
     * @throws Throwable
     */
    public function render( $request, $exception )
    {
        if ( $exception instanceof ModelNotFoundException && $request -> wantsJson()) {
            return $this -> errorResponse( null, 'Error', 'Resource not found', Response::HTTP_NOT_FOUND );
        }
        elseif ( $exception instanceof MethodNotAllowedHttpException )
        {
            return $this -> errorResponse( null, 'Error', 'Action is not allowed', Response::HTTP_METHOD_NOT_ALLOWED );
        }
        elseif ( $exception instanceof NotFoundHttpException )
        {
            return $this -> errorResponse( null, 'Error', 'Endpoint do not exist', Response::HTTP_NOT_FOUND );
        }
        elseif ( $exception instanceof AccessDeniedHttpException )
        {
            return $this -> errorResponse( null, 'Error', 'This action is unauthorized', Response::HTTP_FORBIDDEN );
        }
        elseif ( $exception instanceof ValidationException && $request -> wantsJson() ){
            return $this -> errorResponse( $exception -> validator -> errors(), 'Error', 'The given data was invalid.', Response::HTTP_UNPROCESSABLE_ENTITY );
        }
        return parent::render( $request, $exception );
    }

    /**
     * @param Request $request
     * @param AuthenticationException $exception
     * @return JsonResponse|RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception )
    {
        if ( $request -> expectsJson() )
        {
            return $this -> errorResponse( null, 'Error', 'User not authenticated', Response::HTTP_UNAUTHORIZED );
        }
        return redirect()->guest('login');
    }

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
