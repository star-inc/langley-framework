<?php
/**
 * Langley Framework
 * @package    langley-framework
 * @author     SuperSonic <supersonic@livemail.tw>
 * @link       https://line.starinc.xyz
 * @copyright  (c) 2021 Star Inc.
 */

class Request
{
    public static function decrypt($enc_data, $json_secret)
    {
        list($encrypted_data, $iv) = explode('::', base64_decode($enc_data), 2);
        $data = openssl_decrypt($encrypted_data, 'aes-256-cbc', $json_secret, 0, $iv);
        return json_decode($data);
    }

    public static function read($secret)
    {
        $raw_input = file_get_contents("php://input");
        return self::decrypt($raw_input, $secret);
    }
}