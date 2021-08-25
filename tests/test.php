<?php

require __DIR__ . '/../vendor/autoload.php';

//调用示例

$configs = [
    // 商户号
    'merchant_number' => '300016',
    // APP秘钥
    'api_key' => 'ade8e0sdds032cebfsdfsd017dfcacd1b6',
    // 请求网关地址
    'gateway_address' => 'http://192.168.69.128:19501',
];

$client = new OnlyShow\WalletApiSdk\Clients($configs);

// 获取商户支持的币种信息
//$res = $client->supportCoins(true);

// 生成地址
$res = $client->createAddress(520, 'http://localhost:8080/callback');

// 校验地址合法性
//$res = $client->checkAddress(520, '0x5a8c6b8f12d39978fbfd96b1b10b68f60430eb10');

//发送提币申请
//$res = $client->withdraw(520, 520, 2, '0x5a8c6b8f12d39978fbfd96b1b10b68f60430eb10', 'http://localhost:8080/callback', time(), '测试备注信息');

//代付
//$res = $client->proxypay(520, 520, 2, '0x5a8c6b8f12d39978fbfd96b1b10b68f60430eb10', 'http://localhost:8080/callback', time(), '测试备注信息');

var_dump(json_decode($res, true));