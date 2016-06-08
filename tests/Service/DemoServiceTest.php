<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/3/21
 * Time: 11:29
 */

namespace Com\Youzan\Tcpdemo\Tests\Service;


use Com\Youzan\NovaTcpDemo\Entity\Demo;
use Com\Youzan\NovaTcpDemo\Service\DemoService;
use Com\Youzan\Shop\Api\Info\Service\ShopInfoService;
use Zan\Framework\Foundation\Core\Config;
use Zan\Framework\Network\Connection\ConnectionInitiator;
use Zan\Framework\Store\Facade\KV;
use Zan\Framework\Testing\TaskTest;

class DemoServiceTest extends TaskTest {
    public function initTask()
    {
        ConnectionInitiator::getInstance()->init('connection', null);
        return parent::initTask();
    }

    public function taskEchoBackWork()
    {
//        $service = new ShopInfoService();
//        $res = (yield $service->selectByNo(20160101));
//        var_dump($res);
        $service = new DemoService();
        try {
            $result = (yield $service->echoBack('hello'));
        } catch (\Exception $e) {
            var_dump($e->getTraceAsString());
        }
//        $result = (yield $service->echoBack($result));
//        $result = (yield $service->echoBack($result));
//        $result = (yield $service->echoBack($result));
//        $result = (yield $service->echoBack($result));
//        $result = (yield $service->echoBack($result));
//        $result = (yield $service->echoBack($result));

        //$this->assertEquals('hello', $result, 'DemoService.echoBack rpc call failed');
    }
//
//    public function taskHelloWork()
//    {
//        $service = new DemoService();
//        $result = (yield $service->hello('demo'));
//
//        $this->assertTrue(is_a($result,Demo::class,'DemoService.hello return invalid demo entity'));
//        $this->assertEquals('demo',$result->name, 'DemoService.hello return demo.name failed');
//    }
//
//    public function taskReturnEmptyArrayWork()
//    {
//        $service = new DemoService();
//        $result = (yield $service->returnEmptyArray());
//
//        $this->assertEquals([], $result, 'DemoServer::returnEmptyArray failed');
//    }
//
//    public function taskReturnNullResultWork()
//    {
//        $service = new DemoService();
//        $result = (yield $service->returnNullResult());
//
//        $this->assertNull($result, 'DemoServer::returnNullResult failed');
//    }
//
//    public function taskTestException()
//    {
//        $exceptionMsg = '';
//
//        try {
//            $service = new DemoService();
//            $result = (yield $service->testException());
//        } catch (\Exception $e) {
//            $exceptionMsg = $e->getMessage();
//        }
//        $this->assertEquals('Nova Tcp Demo Exception', $exceptionMsg, 'DemoServer::taskTestException failed');
//    }

//    public function taskTestTcpMultiplexer()
//    {
//        $s1 = microtime(true);
//        $service = new DemoService();
//        $result = (yield $service->echoBack('hello'));
//        d($result);
//        $res = (yield $service->echoBack('hello1'));
        
//        $service = new DemoService();
//        $coroutines = [
//            $service->echoBack('hello'),
//            $service->echoBack('hello1'),
//            $service->echoBack('hello2'),
//            $service->echoBack('hello3'),
//            $service->echoBack('hello4'),
//            $service->echoBack('hello5'),
//            $this->sleep(),
//            $this->sleep(),
//            $this->sleep(),
//            $this->sleep(),
//            $this->sleep(),
//            $this->sleep(),
//            $this->sleep(),
//        ];
//
//        $res = (yield parallel($coroutines));
//        $s2 = floor((microtime(true) - $s1) * 1000) ;
//        d($res);
//        d('time:' . $s2);
//    }
//
//    public function sleep()
//    {
//        yield taskSleep(20);
//    }

//    public function taskTestKV()
//    {
//        $res = (yield KV::set('test.test.test', 'test_string', 'ssdfsd'));
//        $this->assertTrue($res, 'KV set failed');
//        $res = (yield KV::get('test.test.test', 'test_string'));
//        $this->assertEquals('ssdfsd', $res, 'KV get1 failed');
//        $res = (yield KV::remove('test.test.test', 'test_string'));
//        $this->assertTrue($res, 'KV remove failed');
//        $res = (yield KV::get('test.test.test', 'test_string'));
//        $this->assertNull($res, 'KV get2 failed');
//        $list = ["sdf", 1, ['sdf', 'fds']];
//        $res = (yield KV::setList('test.test.test', 'test_string', $list));
//        var_dump('setList:', $res);
//        $res = (yield KV::get('test.test.test', 'test_string'));
//        var_dump('getList:', $res);
//    }
}