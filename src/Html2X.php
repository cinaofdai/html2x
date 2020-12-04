<?php

namespace dh2y\html2x;

use JonnyW\PhantomJs\Client;

class Html2X
{

    /**
     * 操作句柄
     * @var string
     * @access protected
     */
    protected $handler    ;

    protected $config = [];


    private static $instance=null;  //创建静态单列对象变量

    /**
     * Html2X constructor.
     * @param array $config
     * @throws \Exception
     */
    private function __construct(){
        $this->handler  = Client::getInstance();
        $this->handler->getEngine()->setPath('/usr/local/bin/phantomjs');
    }

    /**
     * 单列模式
     * @param array $config
     * @return Html2X|null
     */
    public static function getInstance($config = array()){
        if(empty(self::$instance)) {
            self::$instance=new Html2X($config);
        }
        return self::$instance;
    }

    /**
     * 克隆函数私有化，防止外部克隆对象
     * @throws \Exception
     */
    private function __clone(){
        throw new \Exception('禁止克隆');
    }

    /**
     * 返还错误信息
     * @return string
     */
    public function getError(){
        return $this->error;
    }

    /**
     * 设置错误信息
     * @param $error
     */
    public function setError($error){
        $this->error = $error;
    }

    /**
     * 将html转图片
     * @param $url string  url地址
     * @param $out_put string 保存地址
     * @param $width  integer 宽
     * @param $height integer 高
     * @param string $request
     */
    public function toImage($url,$out_put,$width,$height,$request='GET'){
        $request = $this->handler->getMessageFactory()->createCaptureRequest($url, $request);
        $request->setOutputFile($out_put);
        $request->setViewportSize($width, $height);
        $request->setCaptureDimensions($width, $height, 0, 0);

        $response = $this->handler->getMessageFactory()->createResponse();
        $this->handler->send($request, $response);
    }

}