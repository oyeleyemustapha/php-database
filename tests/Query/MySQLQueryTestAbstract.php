<?php
/**
 * Class MySQLQueryTestAbstract
 *
 * @filesource   MySQLQueryTestAbstract.php
 * @created      28.06.2017
 * @package      chillerlan\DatabaseTest\Query
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2017 Smiley
 * @license      MIT
 */

namespace chillerlan\DatabaseTest\Query;

abstract class MySQLQueryTestAbstract extends QueryTestAbstract{

	protected $envVar      = 'DB_MYSQLI_';

	public function testCreateDatabase(){
		$this->assertSame(
			'CREATE DATABASE `vagrant` CHARACTER SET utf8mb4 COLLATE utf8mb4_bin',
			$this->createDatabase()->sql()
		);

		$this->assertSame(
			'CREATE DATABASE IF NOT EXISTS `vagrant` CHARACTER SET utf8mb4 COLLATE utf8mb4_bin',
			$this->createDatabase()->charset('utf8mb4_bin')->ifNotExists()->sql()
		);
	}


}