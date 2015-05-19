--TEST--
Should construct and connect the zookeeper
--SKIPIF--
<?php
if (!extension_loaded('zookeeper')) {
    echo 'Zookeeper extension is not loaded'
};
--FILE--
<?php
$client = new Zookeeper('localhost:2181', null, -1);
--EXPECTF--
Warning: Zookeeper::__construct(): recv_timeout parameter has to be greater than 0 in %s on line %d
