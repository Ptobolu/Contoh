<?php

function sortByPriceAscending(string $jsonString) : string
{
    $obj = json_decode($jsonString, true);
    for($i = 0; $i < count($obj) - 1; $i++)
    {
        if($obj[$i+1]['price'] < $obj[$i]['price'])
        {
            list($obj[$i], $obj[$i+1]) = array($obj[$i+1], $obj[$i]);
        }
    }
    return json_encode($obj);
}

echo sortByPriceAscending('[{"name":"eggs","price":1},{"name":"coffee","price":9.99},{"name":"rice","price":4.04}]');