<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mq.proto

namespace DucCnzj\EventBus\Mq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>mq.Pub</code>
 */
class Pub extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string data = 1;</code>
     */
    protected $data = '';
    /**
     * Generated from protobuf field <code>string queue = 2;</code>
     */
    protected $queue = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data
     *     @type string $queue
     * }
     */
    public function __construct($data = NULL) {
        \DucCnzj\EventBus\Mq\Mq::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string data = 1;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>string data = 1;</code>
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
     * Generated from protobuf field <code>string queue = 2;</code>
     * @return string
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Generated from protobuf field <code>string queue = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setQueue($var)
    {
        GPBUtil::checkString($var, True);
        $this->queue = $var;

        return $this;
    }

}

