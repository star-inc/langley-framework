<?php
/**
 * Langley Framework
 * @package    langley-framework
 * @author     SuperSonic <supersonic@livemail.tw>
 * @link       https://line.starinc.xyz
 * @copyright  (c) 2021 Star Inc.
 */

class Response
{
    public const TYPE_TEXT = "text";

    public function factory($type, $content)
    {
        return json_encode([
            "type" => $type,
            "content" => $content,
        ]);
    }
}