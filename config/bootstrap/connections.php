<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2010, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

use lithium\data\Connections;

/**
 * Default collection, primarily Posts
 */
Connections::add('default', array(
	'adapter' => 'MongoDb',
	'host' => 'dbh34.mongolab.com:27437/orchestra_7fe32b26_dae1e',
	'database' => 'posts',
	'login' => '7fe32b26',
	'password' => 'mofa7b9m641mdh379abfsukd3v',
));

Connections::add('test', array(
	'adapter' => 'MongoDb',
	'host' => 'dbh34.mongolab.com:27437/orchestra_7fe32b26_dae1e',
	'database' => 'testing',
	'login' => '7fe32b26',
	'password' => 'mofa7b9m641mdh379abfsukd3v',
));

/**
 * Users Collection
 */
Connections::add('li3_users', array(
	'adapter' => 'MongoDb',
	'host' => 'dbh34.mongolab.com:27437/orchestra_7fe32b26_dae1e',
	'database' => 'labrats',
	'login' => '7fe32b26',
	'password' => 'mofa7b9m641mdh379abfsukd3v',
));

?>