<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mq.proto

namespace DucCnzj\EventBus\Mq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>mq.TopicSubscribeRequest</code>
 */
class TopicSubscribeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string topic = 1;</code>
     */
    protected $topic = '';
    /**
     * Generated from protobuf field <code>string queueName = 2;</code>
     */
    protected $queueName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic
     *     @type string $queueName
     * }
     */
    public function __construct($data = NULL) {
        \DucCnzj\EventBus\Mq\Mq::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string topic = 1;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Generated from protobuf field <code>string topic = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string queueName = 2;</code>
     * @return string
     */
    public function getQueueName()
    {
        return $this->queueName;
    }

    /**
     * Generated from protobuf field <code>string queueName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setQueueName($var)
    {
        GPBUtil::checkString($var, True);
        $this->queueName = $var;

        return $this;
    }

}
