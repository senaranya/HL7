<?php

namespace Aranyasen\HL7;

/**
 * Usage:
 * <code>
 *
 * $connection = new Connection('127.0.0.1', 5002);
 *
 * $req = new Message();
 *
 * ... set some request attributes
 *
 * $response = $connection->send($req);
 *
 * $response->toString(); // Read ACK message from remote
 * </code>
 *
 * The Connection object represents the tcp connection to the HL7 message broker. The Connection has only one public
 * method (apart from the constructor), send(). The 'send' method takes a Message object as argument, and also
 * returns a Message object. The send method can be used more than once, before the connection is closed.
 * Connection is closed automatically when the connection object is destroyed.
 *
 * The Connection object holds the following fields:
 *
 * MESSAGE_PREFIX
 *
 * The prefix to be sent to the HL7 server to initiate the
 * message. Defaults to \013.
 *
 * MESSAGE_SUFFIX
 * End of message signal for HL7 server. Defaults to \034\015.
 *
 */
class Connection
{
    protected $socket;
    protected $MESSAGE_PREFIX;
    protected $MESSAGE_SUFFIX;

    /**
     * Creates a connection to a HL7 server, or returns undef when a
     * connection could not be established.are:
     *
     * @param string $host Host to connect to
     * @param string $port Port to connect to
     * @throws \RuntimeException
     */
    public function __construct(string $host, string $port)
    {
        $this->setSocket($host, $port);
        $this->MESSAGE_PREFIX = "\013";
        $this->MESSAGE_SUFFIX = "\034\015";
    }

    /**
     * @param string $host
     * @param string $port
     * @throws \RuntimeException
     */
    protected function setSocket(string $host, string $port)
    {
        // Create socket
        $socket = socket_create(AF_INET, SOCK_STREAM, 0);
        if (!$socket) {
            throw new \RuntimeException('Failed to create socket. reason: ' . socket_strerror(socket_last_error()));
        }
        $result = socket_connect($socket, $host, $port);
        if (!$result) {
            throw new \RuntimeException("Failed to connect to server ($host:$port). reason: " . socket_strerror(socket_last_error()));
        }
        $this->socket = $socket;
    }

    /**
     * Sends a Message object over this connection.
     *
     * @param Message $req
     * @param string $responseCharEncoding The expected character encoding of the response.
     * @return Message
     * @access public
     * @throws \Exception
     * @throws \InvalidArgumentException
     */
    public function send(Message $req, string $responseCharEncoding = 'UTF-8'): Message
    {
        $hl7Msg = $req->toString();

        $message = $this->MESSAGE_PREFIX . $hl7Msg . $this->MESSAGE_SUFFIX;

        socket_write($this->socket, $message, \strlen($message)) or die("Could not send data to server\n");

        $data = null;

        while (($buf = socket_read($this->socket, 1024)) !== false) {
            $data .= $buf;
            if (preg_match('/' . $this->MESSAGE_SUFFIX . '$/', $data)) {
                break;
            }
        }

        // Remove message prefix and suffix
        $data = preg_replace('/^' . $this->MESSAGE_PREFIX . '/', '', $data);
        $data = preg_replace('/' . $this->MESSAGE_SUFFIX . '$/', '', $data);

        // set character encoding
        $data = mb_convert_encoding($data, $responseCharEncoding);

        return new Message($data);
    }

    /**
     * Close the socket
     * TODO: Close only when the socket is open
     */
    private function close()
    {
        try {
            socket_close($this->socket);
        } catch(\Exception $e) {
            echo 'Failed to close socket: ' . socket_strerror(socket_last_error()) . PHP_EOL;
        }
    }

    public function __destruct()
    {
        $this->close();
    }
}
