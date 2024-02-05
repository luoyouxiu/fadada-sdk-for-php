<?php
namespace LuoYouXiu\FadadaSdkForPhp\Client;
interface IClient{
	
	public function request($accessToken, $bizContent, $path);

    public function downLoad_request($accessToken, $bizContent, $path);

    public function request_file($url, $filePath);


}
