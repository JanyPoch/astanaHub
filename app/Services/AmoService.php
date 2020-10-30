<?php

namespace App\Services;

use \GuzzleHttp\Client;


class AmoService
{
    private $token;
    private $secret;
    private $id;
    protected $client;
    private $redirectUri;
    protected $apiClient;

    public function __construct()
    {
        $this->secret = config('amo.secret');
        $this->id = config('amo.id');
        $this->redirectUri = config('amo.redirect_uri');
        $this->client = new Client();
        $this->token = [
            "token_type" => 'Bearer',
            "expires_in" => 86400,
            "access_token" => env('AMO_TOKEN'),
            "refresh_token" => env('AMO_REFRESH_TOKEN')
        ]; //temporary solution

    }


    public function getCode()
    {

    }

    public function apiClient()
    {
        $this->apiClient = new \AmoCRM\Client\AmoCRMApiClient($this->id, $this->secret, $this->redirectUri);
        $this->apiClient->setAccessToken($this->setToken())
            ->setAccountBaseDomain('elvientodeplata.amocrm.ru')
            ->onAccessTokenRefresh(
                function (\League\OAuth2\Client\Token\AccessTokenInterface $accessToken, string $baseDomain) {
                    saveToken(
                        [
                            'accessToken' => $accessToken->getToken(),
                            'refreshToken' => $accessToken->getRefreshToken(),
                            'expires' => $accessToken->getExpires(),
                            'baseDomain' => $baseDomain,
                        ]
                    );
                });

        return $this->apiClient;
    }

    public function getToken()
    {
        $http = new Client;
        $url = 'https://'.config('amo.host').'/oauth2/access_token';
        $response = $http->post($url, [
            'form_params' => [
                'client_id'     => $this->id,
                'client_secret' => $this->secret,
                'grant_type'    => 'authorization_code',
                'code'         => env('AMO_CODE'),
                'redirect_uri' => 'https://zoyd.space'
            ],
            'headers'     => [
                'Content-type' => 'Content-Type:application/json',
            ]
        ]);
        $response = $response->getBody()->getContents();

        return $response;
    }

    public function setToken()
    {
        $accessToken = new \League\OAuth2\Client\Token\AccessToken($this->token);
        return $accessToken;
    }
}
