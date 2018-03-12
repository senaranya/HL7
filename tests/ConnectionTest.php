<?php
declare(strict_types=1);

namespace Aranyasen\HL7\tests;

use Aranyasen\HL7\Message;
use Aranyasen\HL7\Connection;
use Aranyasen\HL7\Segment;
use Aranyasen\HL7\Segments\MSH;

class ConnectionTest extends TestCase
{
    public function test()
    {
        $this->markTestIncomplete();

        $msg  = new Message();
        $msg->addSegment(new MSH());

        $seg1 = new Segment('PID');

        $seg1->setField(3, 'XXX');

        $msg->addSegment($seg1);

        // If you have fork support, try this...

        // $pid = pcntl_fork();
        //
        // if (! $pid) {
        //   // Server process
        //   set_time_limit(0);
        //
        //   // Turn on implicit output flushing so we see what we're getting
        //   // as it comes in.
        //   ob_implicit_flush();
        //
        //   if (($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) < 0) {
        //     echo 'socket_create() failed: reason: ' . socket_strerror($sock) . "\n";
        //   }
        //
        //   if (($ret = socket_bind($sock, "localhost", 12011)) < 0) {
        //     echo 'socket_bind() failed: reason: ' . socket_strerror($ret) . "\n";
        //   }
        //
        //   if (($ret = socket_listen($sock, 5)) < 0) {
        //     echo 'socket_listen() failed: reason: ' . socket_strerror($ret) . "\n";
        //   }
        //
        //   do {
        //     if (($msgsock = socket_accept($sock)) < 0) {
        //       echo 'socket_accept() failed: reason: ' . socket_strerror($msgsock) . "\n";
        //       break;
        //     }
        //
        //     if (false === ($buf = socket_read($msgsock, 8192, PHP_NORMAL_READ))) {
        //       echo 'socket_read() failed: reason: ' . socket_strerror($ret) . "\n";
        //       break 2;
        //     }
        //
        //     echo "Incoming: $buf\n";
        //
        //     $msg = new Message($buf);
        //
        //     $ack = new ACK($msg);
        //     socket_write($msgsock, "\013" . $ack->toString() . "\034\015", \strlen($ack->toString() + 3));
        //     echo 'Said: ' . $ack->toString(1) . "\n";
        //
        //   } while (true);
        //
        //   socket_close($msgsock);
        //
        //   exit;
        // }

        $socket = $this->getMock('Net_Socket');

        $socket->expects($this->once())
                ->method('write')
                ->with("\013" . $msg->toString() . "\034\015");

        $socket->expects($this->once())
                ->method('read')
                ->will($this->returnValue("MSH*^~\\&*1\rPID***xxx\r" . "\034\015"));

        $conn = new Connection($socket);

        $resp = $conn->send($msg);

        $this->assertInstanceOf(Message::class, $resp);
    }
}
