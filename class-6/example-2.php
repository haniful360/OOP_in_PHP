<?php

class Counter
{

    public static $count = 0;

    public function increment()
    {
       return self::$count++;
      
    }
}

$counter = new Counter();
echo $counter->increment();

