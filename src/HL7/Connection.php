<?php

namespace Aranyasen\HL7;

/**
 * Usage:
 * <code>
 * $socket = new Net_Socket();
 * $socket->connect('localhost', 8089);
 *
 * $conn = new Net_HL7_Connection($socket);
 *
 *
 * $req = new Net_HL7_Message();
 *
 * ... set some request attributes
 *
 * $res = $conn->send($req);
 * </code>
 *
 * The Connection object represents the tcp connection to the HL7 message broker. The Connection has only two useful
 * methods (apart from the constructor), send and close. The 'send' method takes a Message object as argument, and also
 * returns a Message object. The send method can be used more than once, before the connection is closed.
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
    protected $HANDLE;
    protected $MESSAGE_PREFIX;
    protected $MESSAGE_SUFFIX;

    /**
     * Creates a connection to a HL7 server, or returns undef when a
     * connection could not be established.are:
     *
     * @param string $host Host to connect to
     * @param string $port Port to connect to
     */
    public function __construct(string $host, string $port)
    {
        $this->setSocket($host, $port);
        $this->MESSAGE_PREFIX = "\013";
        $this->MESSAGE_SUFFIX = "\034\015";
    }

    protected function setSocket(string $host, string $port)
    {
        // Create socket
        $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
        $result = socket_connect($socket, $host, $port) or die("Could not connect toserver\n");
        $this->HANDLE = $socket;
    }

    /**
     * Sends a Net_HL7_Message object over this connection.
     *
     * @param Message $req
     * @param string $responseCharEncoding The expected character encoding of the response.
     * @return Message
     * @access public
     * @see Message
     * @throws \InvalidArgumentException
     */
    public function send(Message $req, string $responseCharEncoding = 'UTF-8'): Message
    {
        $handle = $this->HANDLE;
        $hl7Msg = $req->toString();

        $message = $this->MESSAGE_PREFIX . $hl7Msg . $this->MESSAGE_SUFFIX;

        socket_write($handle, $message, \strlen($message)) or die("Could not send data to server\n");

        $data = null;

        while (($buf = socket_read($handle, 1024)) !== false) {
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
}
