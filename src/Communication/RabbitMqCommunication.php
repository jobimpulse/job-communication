<?php

declare(strict_types=1);

namespace KWedrowicz\JobCommunication\Communication;

use KWedrowicz\JobCommunication\Message\MessageInterface;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RabbitMqCommunication implements CommunicationInterface
{
    private $connection;
    private $channel;

    public function __construct(RabbitMqConnectionParams $params)
    {
        $this->connection = new AMQPStreamConnection($params->getHost(), $params->getPort(), $params->getUser(), $params->getPassword());
        $this->channel = $this->connection->channel();
    }

    public function __destruct()
    {
        $this->channel->close();
        $this->connection->close();
    }

    public function send(MessageInterface $message): void
    {
        $this->channel->queue_declare($message->getChannel(), false, true, false, false);
        $msg = new AMQPMessage(serialize($message));
        $this->channel->basic_publish($msg, '', $message->getChannel());
    }

    public function purge(string $queue): void
    {
        $this->channel->queue_purge($queue);
    }

    public function getOne(string $queue): MessageInterface
    {
        $msg = $this->channel->basic_get($queue);

        return unserialize($msg->body, array('allowed_classes' => true));
    }
}
