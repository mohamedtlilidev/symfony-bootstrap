<?php
/**
 * Created by PhpStorm.
 * User: g361183
 * Date: 4/12/20
 * Time: 4:55 PM
 */

namespace App\Service;

use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Session\Session;

class LdapService
{
    private $url;

    function __construct($url)
    {
        $this->url=$url;
    }

    function setUserSession(Session $session, $username)
    {
        $session->set('username', $username);
    }

    function getUserSession(Session $session, $keysession, $matriucle)
    {
        if(!$session->get($keysession))
        {
            $username=$this->getUserByName($matriucle);
            $this->setUserSession($session ,$username);
        }
        return $session->get($keysession);
    }


    function getUserByName($matricule)
    {
        $url=$this->url;
        try {
            $dataSend=[
                'Employee'=>[
                    'search'=>preg_replace('/g(\d+)/i', '$1', $matricule)
                ]
            ];
            $client=new Client();
            $response=$client->request('POST', $url, [
                'body'=>json_encode($dataSend),
                'proxy'=>''
            ]);
            $response->getStatusCode(); # 200
            $response->getHeaderLine('content-type');
            $cleanEmps=$response->getBody();
            $cleanEmps=json_decode($cleanEmps, true);
            $listUsers=[];
            foreach ($cleanEmps["data"] as $user) {
                array_push($listUsers, $user['nom'] . ' ' . $user['prenom'] . '|' . $user['matricule']);
            }
            return $cleanEmps["data"][0]['nom'] . ' ' . $cleanEmps["data"][0]['prenom'];
        } catch (\GuzzleHttp\Exception\RequestException $exception) {
            return $exception->getResponse();
        }
    }

}