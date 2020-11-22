<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mq.proto

namespace DucCnzj\EventBus\Mq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>mq.Response</code>
 */
class Response extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     */
    protected $success = false;
    /**
     * Generated from protobuf field <code>string data = 2;</code>
     */
    protected $data = '';
    /**
     * Generated from protobuf field <code>string queue = 3;</code>
     */
    protected $queue = '';
    /**
     * Generated from protobuf field <code>uint64 id = 4;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string runAfter = 5;</code>
     */
    protected $runAfter = '';
    /**
     * Generated from protobuf field <code>uint64 delaySeconds = 6;</code>
     */
    protected $delaySeconds = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $success
     *     @type string $data
     *     @type string $queue
     *     @type int|string $id
     *     @type string $runAfter
     *     @type int|string $delaySeconds
     * }
     */
    public function __construct($data = NULL) {
        \DucCnzj\EventBus\Mq\Mq::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>string data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, True);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string queue = 3;</code>
     * @return string
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Generated from protobuf field <code>string queue = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setQueue($var)
    {
        GPBUtil::checkString($var, True);
        $this->queue = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 id = 4;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint64 id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string runAfter = 5;</code>
     * @return string
     */
    public function getRunAfter()
    {
        return $this->runAfter;
    }

    /**
     * Generated from protobuf field <code>string runAfter = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRunAfter($var)
    {
        GPBUtil::checkString($var, True);
        $this->runAfter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 delaySeconds = 6;</code>
     * @return int|string
     */
    public function getDelaySeconds()
    {
        return $this->delaySeconds;
    }

    /**
     * Generated from protobuf field <code>uint64 delaySeconds = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDelaySeconds($var)
    {
        GPBUtil::checkUint64($var);
        $this->delaySeconds = $var;

        return $this;
    }

}

