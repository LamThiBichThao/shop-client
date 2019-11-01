<?php
namespace App\Libraries;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 6/23/2017
 * Time: 8:24 AM
 */
class ShopApi{
	protected $url;
    protected $version;
    public function __construct()
    {
        $this->url = config('two_home_api.url');
        $this->version = config('two_home_api.version');
    }
    protected function getApi($uri, $params = [], $method = '')
    {
        try {
            $this->url = config('two_home_api.url');
            $client = new Client(['verify' => false]);
            // Get url
            $url = $this->url . '/' . $this->version . $uri;
            switch ($method) {
                case 'post':
                    $res = $client->post($url, array(
                        'form_params' => $params,
                        'headers' => [
                            'Expect' => '',
                        ],
                        'timeout' => 10,
                        'connect_timeout' => 10,
                    ));
                    break;
                case 'get':
                    $res = $client->get($url, array('form_params' => $params));
                    break;
            }
            if (isset($res)) {
                return $res;
            } else {
                return false;
            }
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return false;
        }
    }

    /**
     * Get api data
     * @param $uri
     * @param null $param
     * @param string $method
     * @return bool
     */
	protected function getApiData($uri, $param = array(), $method = 'post')
    {
        try {
            $res = $this->getApi($uri, $param, $method);
            if ($res) {
                $result = $res->getBody()->getContents();
                $result = \GuzzleHttp\json_decode($result);
                if($result->api_result->result > 0){
                    return array();
                }
                return $result->{'datas'};
            } else {
                return array();
            }
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return array();
        }
    }
}
?>