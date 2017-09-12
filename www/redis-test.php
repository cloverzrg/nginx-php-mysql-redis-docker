<?php
   $redis = new Redis();
   $redis->connect('127.0.0.1', 6379);
   $redis->set("test-key", "Redis");
   echo $redis->get("test-key");
   $redis->del("test-key");