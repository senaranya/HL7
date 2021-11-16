# Aranyasen\HL7\Connection  

Usage:
```php
$connection = new Connection('127.0.0.1', 5002);
$req = new Message();
// ... set some request attributes
$response = $connection->send($req);
$response->toString(); // Read ACK message from remote
```

The Connection object represents the tcp connection to the HL7 message broker. The Connection has only one public
method (apart from the constructor), send(). The 'send' method takes a Message object as argument, and also
returns a Message object. The send method can be used more than once, before the connection is closed.
Connection is closed automatically when the connection object is destroyed.

The Connection object holds the following fields:

MESSAGE_PREFIX

The prefix to be sent to the HL7 server to initiate the
message. Defaults to \013.

MESSAGE_SUFFIX
End of message signal for HL7 server. Defaults to \034\015.  





## Methods

| Name | Description |
|------|-------------|
|[__construct](#connection__construct)|Creates a connection to a HL7 server, or throws exception when a connection could not be established.|
|[__destruct](#connection__destruct)||
|[getSocket](#connectiongetsocket)||
|[send](#connectionsend)|Sends a Message object over this connection.|




### Connection::__construct  

**Description**

```php
public __construct (string $host, int $port, int $timeout)
```

Creates a connection to a HL7 server, or throws exception when a connection could not be established. 

 

**Parameters**

* `(string) $host`
: Host to connect to  
* `(int) $port`
: Port to connect to  
* `(int) $timeout`
: Connection timeout  

**Return Values**

`void`


**Throws Exceptions**


`\HL7ConnectionException`


<hr />


### Connection::__destruct  

**Description**

```php
 __destruct (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### Connection::getSocket  

**Description**

```php
 getSocket (void)
```

 

 

**Parameters**

`This function has no parameters.`

**Return Values**

`void`


<hr />


### Connection::send  

**Description**

```php
public send (\Message $msg, string $responseCharEncoding, bool $noWait)
```

Sends a Message object over this connection. 

 

**Parameters**

* `(\Message) $msg`
* `(string) $responseCharEncoding`
: The expected character encoding of the response.  
* `(bool) $noWait`
: Do no wait for ACK. Helpful for building load testing tools...  

**Return Values**

`\Message|null`




**Throws Exceptions**


`\HL7ConnectionException`


`\HL7Exception`


`\ReflectionException`


<hr />

