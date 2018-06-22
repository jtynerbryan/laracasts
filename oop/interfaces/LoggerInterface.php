<?php

interface Logger
{

}

class FileLogger implements Logger
{
    public function execute($message)
    {
        var_dump('log the message to the file: ' . $message);
    }
}

class DatabaseLogger implements Logger
{
    public function execute($message)
    {
        var_dump('log the message to the database: ' . $message);
    }
}

class UsersController
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = 'john doe';

        // log this information
        $this->logger->execute($user);
    }
}

$controller = new UsersController(new DatabaseLogger);

var_dump($controller->show());
