<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

use App\Providers\FacebookProvider;

class ProfileFacebookController
{
    protected $facebookProvider;

    public function __construct(FacebookProvider $facebookProvider)
    {
        $this->facebookProvider = $facebookProvider;
    }

    public function get(Request $request, Response $response, $args = [])
    {
        $id = (int)$args['id'];

        $extraFields = explode(',', $args['extraFields']);
        foreach ($extraFields as $key => $value) {
            if (empty($value)) {
               unset($extraFields[$key]);
            }
        }
        /*if (empty($extraFields)) {
           //empty array
        }*/
        
        $profile = $this->facebookProvider->getUserProfileByFbId($id, $extraFields);

        return $response->withJson($profile);
    }
}