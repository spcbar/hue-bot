<?php

namespace SpaceBar\Alexa;

use MaxBeckers\AmazonAlexa\Helper\ResponseHelper;
use MaxBeckers\AmazonAlexa\Request\Request;
use MaxBeckers\AmazonAlexa\Request\Request\Standard\IntentRequest;
use MaxBeckers\AmazonAlexa\RequestHandler\AbstractRequestHandler;
use MaxBeckers\AmazonAlexa\Response\Response;

class RequestHandler extends AbstractRequestHandler
{
    /** @var ResponseHelper */
    private $responseHelper;

    /** @var string */
    private $intentName;

    public function __construct()
    {
        $this->supportedApplicationIds = ['my_amazon_skill_id'];
        $this->intentName              = 'MyTestIntent';

        $this->responseHelper = new ResponseHelper();
    }

    /**
     * Check if the request handler can handle given request.
     * For example:
     * Request type is an intent request and your skill uses the AMAZON.HelpIntent and the AMAZON.StopIntent you will
     * have two RequestHandlers for this two Intents. So in your HelpIntentHandler you can return true when you get an
     * IntentRequest with intent name AMAZON.HelpIntent.
     *
     * @param Request $request
     *
     * @return bool
     */
    public function supportsRequest(Request $request): bool
    {
        return $request->request instanceOf IntentRequest &&
            $this->intentName === $request->request->intent->name;
    }

    /**
     * Handle the given request and return a response object or null.
     * Null may only be returned if Amazon does not allow a response to be sent. This is i.e. the case for a SessionEndedRequest.
     *
     * @param Request $request
     *
     * @return Response|null
     */
    public function handleRequest(Request $request)
    {
        if ($request instanceof Request\Standard\SessionEndedRequest) {
            return null;
        }

        return $this->responseHelper->respond('Success :)');
    }
}