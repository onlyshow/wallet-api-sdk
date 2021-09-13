<?php

namespace OnlyShow\WalletApiSdk;

class Clients
{
    private $configs = array();

    public function __construct(array $configs)
    {
        if (!array_key_exists('merchant_number', $configs)) {
            throw new \InvalidArgumentException('param merchant_number miss');
        }

        if (!array_key_exists('wallet_id', $configs)) {
            throw new \InvalidArgumentException('param wallet_id miss');
        }

        if (!array_key_exists('api_key', $configs)) {
            throw new \InvalidArgumentException('param api_key miss');
        }

        if (!array_key_exists('gateway_address', $configs)) {
            throw new \InvalidArgumentException('param gateway_address miss');
        }

        $this->configs = $configs;
    }


    // 获取商户支持的币种信息
    public function supportCoins($showBalance = true)
    {
        $body = array(
            'merchant_id' => $this->configs['merchant_number'],
            'wallet_id' => $this->configs['wallet_id'],
        );

        $body = json_encode($body);
        $timestamp = time();
        $nonce = rand(100000, 999999);

        $url = $this->configs['gateway_address'].'/mch/support-coins';
        $key = $this->configs['api_key'];

        $sign = md5($body.$key.$nonce.$timestamp);
        
        $data = array(
            'timestamp' => $timestamp,
            'nonce' => $nonce,
            'sign' => $sign,
            'body' => $body
        );

        $data_string = json_encode($data);

        return http_post($url, $data_string);
    }

    // 生成地址
    public function createAddress($mainCoinType, $callUrl)
    {
        $body = array(
            'merchant_id' => $this->configs['merchant_number'],
            'wallet_id' => $this->configs['wallet_id'],
            'main_coin_type' => $mainCoinType,
            'call_url' => $callUrl,
        );

        $body = json_encode($body);
        $timestamp = time();
        $nonce = rand(100000, 999999);

        $url = $this->configs['gateway_address'].'/mch/address/create';
        $key = $this->configs['api_key'];

        $sign = md5($body.$key.$nonce.$timestamp);
        
        $data = array(
            'timestamp' => $timestamp,
            'nonce' => $nonce,
            'sign' => $sign,
            'body' => $body
        );

        $data_string = json_encode($data);

        return http_post($url, $data_string);
    }

    // 发送提币申请
    public function withdraw($mainCoinType, $coinType, $amount, $address, $callUrl, $businessId, $memo)
    {
        $body = array(
            'merchant_id' => $this->configs['merchant_number'],
            'wallet_id' => $this->configs['wallet_id'],
            'main_coin_type' => $mainCoinType,
            'address' => $address,
            'amount' => $amount,
            'coin_type' => $coinType,
            'call_url' => $callUrl,
            'business_id' => $businessId,
            'memo' => $memo
        );

        $body = json_encode($body);
        $timestamp = time();
        $nonce = rand(100000, 999999);

        $url = $this->configs['gateway_address'].'/mch/withdraw';
        $key = $this->configs['api_key'];

        $sign = md5($body.$key.$nonce.$timestamp);
        
        $data = array(
            'timestamp' => $timestamp,
            'nonce' => $nonce,
            'sign' => $sign,
            'body' => $body
        );

        $data_string = json_encode($data);

        return http_post($url, $data_string);
    }
}
