<?php

use Plank\Mediable\HandlesMediaExceptions;

class SampleExceptionHandler
{
    use HandlesMediaExceptions;

    /**
     * Render an exception into a HttpException for testing purposes.
     *
     * In laravel's exception handler we would call prepareMediaUploadException()
     * inside the render() method, but instead of returning its result,
     * we would pass it to the parent::render().
     *
     * @param  \Exception $e
     * @return \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function render(Exception $e)
    {
        return $this->prepareMediaUploadException($e);
    }
}
