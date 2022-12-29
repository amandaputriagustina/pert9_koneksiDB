<?php

$manager = new MongoDB\Driver\Manager("mongodb+srv://amandaputriias:amanda0101@cluster0.evcpir5.mongodb.net/?retryWrites=true&w=majority");

// Query Class
$query = new MongoDB\Driver\Query(array("restaurant_id" => "40363093"));

//Select DB and Collection
$cursor = $manager->executeQuery('sample_restaurants.restaurants', $query);

//Convert cursor to array and print result
echo "<pre>";
print_r($cursor->toArray());
echo "</pre>";
