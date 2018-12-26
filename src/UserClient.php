<?php
/**
 * Created by PhpStorm.
 * User: xingzhilong
 * Date: 2018-12-26
 * Time: 14:20
 */
namespace GClient;

use Grpc\ChannelCredentials;
use User\RequestStudent;
use User\Student;
use User\UserInfoClient;

class UserClient
{
    public static $userClient = null;
    public $client = null;

    private $address = 'grpc-go';
    private $port = 50051;

    private function __construct()
    {
        $host = '';
        $address = getenv('GRPC_ADDRESS');
        if ($address) {
            $host .= getenv();
        }
        $this->client = new UserInfoClient($this->address . ":" . $this->port, [
            'credentials' => ChannelCredentials::createInsecure(),
        ]);
    }

    public static function instance()
    {
        if (self::$userClient != null) {
            return self::$userClient;
        }
        self::$userClient = new self();
        return self::$userClient;
    }

    public function getStudentByID($studentID): Student
    {
        $request = new RequestStudent();
        $request->setStudentId($studentID);

        /**
         * @var $reply Student
         * @var $status \stdClass
         */
        list($reply, $status) = $this->client->GetStudentByID($request)->wait();
        if ($status->code != 0) {
            return null;
        }
        $address = getenv('PATH');
        print_r($address);  echo '\n';
        print_r('-----------');
        return $reply;
    }
}