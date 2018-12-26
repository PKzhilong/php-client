<?php
// GENERATED CODE -- DO NOT EDIT!

namespace User;

/**
 */
class UserInfoClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \User\RequestStudent $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetStudentByID(\User\RequestStudent $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.UserInfo/GetStudentByID',
        $argument,
        ['\User\Student', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \User\RequestUser $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetUserByID(\User\RequestUser $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.UserInfo/GetUserByID',
        $argument,
        ['\User\User', 'decode'],
        $metadata, $options);
    }

}
