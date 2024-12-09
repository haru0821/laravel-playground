<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;


class RedisController extends Controller
{
    public function redis () {
        // 값 저장 (키, 값)
        Redis::set('name', 'Haru');
        // 값 조회
        $name = Redis::get('name');
        // 키 존재 유무
        if (Redis::exists('name')) echo "key가 name인 값이 있음";
        // 배열 저장시, 문자열만 저장가능한 redis 특성 상, json형식으로 변환 및 저장
        $data = ['name' => 'Haru', 'phone' => '010-0000-0000'];
        Redis::set('user:1', json_encode($data));
        $data = json_decode(Redis::get('user:1'), true);  // 배열로 디코딩
        var_dump($data['name']); // Haru
        // 아래처럼 DB를 직접 지정해서 사용 가능 (기본 default)
        $redis = Redis::connection('default');
        $name = $redis->get('name');
        // 값 키로 삭제
        Redis::del('name');

        // 캐시 저장 (키, 값, 유효기간(초))
        Cache::put('name', 'Haru', 600);
        // 기간으로도 지정 가능
        Cache::put('name', 'Haru', now()->addMinutes(5));
        // 캐시 조회
        $value = Cache::get('name');
        // 캐시 키로 삭제
        Cache::forget('name');
    }
}
