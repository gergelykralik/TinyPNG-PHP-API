<?php
/**
 *  TinyPNG API
 *
 * based ont the repo by Michael Wright - @michaelw90
 *
 * @author Gergely Kralik
 */


class TinyPNG
{

    private $url = 'https://api.tinify.com/shrink';
    private $curl = null;
    private $lastResult = null;

    /**
     * Constructor
     * @param strong $key API key for all requests
     */
    public function __construct($key)
    {
        if ($this->curl === null) {
            $this->curl = curl_init();
            $curlOpts = array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $this->url,
                CURLOPT_USERAGENT => 'Tinify API v1',
                CURLOPT_POST => 1,
                CURLOPT_USERPWD => 'api:'.$key,
                CURLOPT_BINARYTRANSFER => 1
            );
            curl_setopt_array($this->curl, $curlOpts);
        }
    }

    /**
     * Send image shrink request
     * @param  string $file path to file to shrink
     * @return boolean|exception       Is HTTP response 200
     */
    public function shrink($file)
    {
    	if (file_exists($file) === false) {
            throw new Exception('File does not exist');
        }
        curl_setopt($this->getCurl(), CURLOPT_POSTFIELDS, file_get_contents($file));
        $this->lastResult = curl_exec($this->getCurl());
        return $this->lastResult;
    }


    /**
     * Return Curl object
     * @return object|exception
     */
    protected function getCurl()
    {
        if ($this->curl === null) {
            throw new Exception('cURL not yet initialized.');
        }

        return $this->curl;
    }
}