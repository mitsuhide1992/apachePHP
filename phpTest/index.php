<?php
define("TOKEN", "Tank");

$wechatObj = new wechatCallbackapiTest();
$wechatObj->valid();
/**
*  
*/
class wechatCallbackapiTest 
{
	public function valid () {
		file_put_contents("zly.html", "in Text", FILE_APPEND);
		$echoStr = $_GET["echostr"];

		if ($this->checkSignature()) {
			echo $echoStr;
			exit;
		}
	}	

	public function responseMsg () {
		$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
		$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
		$fromUsername = $postObj->FromUserName;
		$toUsername = $postObj->ToUserName;
		$keyword = trim($postObj->Content);
		$MsgType = $postObj->MsgType;
		$MsgId = $postObj->MsgId;
		$CreateTime = intval($postObj->CreateTime);
		$formTime = date("Y-m-d H:i:s", $CreateTime);
		$textTpl = "<xml>
			<ToUserName><![CDATA[%s]]></ToUserName>
			<FromUserName><![CDATA[%s]]></FromUserName>
			<CreateTime>%s</CreateTime>
			<MsgType><![CDATA[%s]]></MsgType>
			<Content><![CDATA[%s]]></Content>
		</xml>";
		$msg = "开发者id：".$toUsername."\n";
		$msg .= "用户id：".$fromUsername."\n";
		$msg .= "消息id：".$MsgId."\n";
		$msg .= "消息发送过来的时间戳：".$CreateTime."\n";
		$msg .= "消息类型：".$MsgType."\n";
		$msg .= "消息内容：".$keyword."\n";
		$msg .= "消息发生的具体时间：".$formTime."\n";
		$msgType = "text";
		$contentStr = $msg;
		$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $CreateTime, $msgType, $contentStr);
		echo $resultStr;
		exit(); 
	}

	private function checkSignature()
	{
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];	
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
		sort($tmpArr);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		var_dump("in check signature");

		if( $tmpStr == $signature ) {
			return true;
		} else {
			return false;
		}
	}

	public function getAccessToken () {

	}
}