<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/7/5
 * Time: 15:28
 */

class BaseApi
{
    public function init()
    {
        $this->verfyRequestParam();
    }

    private function verfyRequestParam()
    {
        $sign = "";
        $signParam = "";
        $this->mParam = $_REQUEST;

        $keyArr = array_keys($this->mParam);
        sort($keyArr);
        foreach ($keyArr as $k)
        {
            $v =  $this->mParam[$k];
            if($k === "sign")
            {
                $signParam = $v;
                continue;
            }
            if($v === "")
            {
                continue;
            }
            $sign .= $k . $v;
        }
        $sign .= "\$GameOver\$";
        $sign = md5($sign);

        if($sign === $signParam)
        {
        }
        else
        {
            throw new Exception("verfyRequestParam error pls check it out");
        }

    }

    private $mParam = array();
    public function getParam($key, $default = null)
    {
        if(count($this->mParam) == 0)
        {
            $this->mParam = $_REQUEST;
        }
        $result = isset($this->mParam[$key]) ? $this->mParam[$key] : $default;
        return $result;
    }
}