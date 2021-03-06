<?php
/**
 * Interface Where
 *
 * @filesource   Where.php
 * @created      09.01.2018
 * @package      chillerlan\Database\Query
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2018 Smiley
 * @license      MIT
 */

namespace chillerlan\Database\Query;

/**
 * @link https://dev.mysql.com/doc/refman/5.7/en/where-optimization.html
 * @link https://www.postgresql.org/docs/current/static/sql-select.html#SQL-WHERE
 * @link https://docs.microsoft.com/de-de/sql/t-sql/queries/where-transact-sql
 */
interface Where{

	/**
	 * @param        $val1
	 * @param        $val2
	 * @param string $operator
	 * @param bool   $bind
	 * @param string $join
	 *
	 * @return $this
	 */
	public function where($val1, $val2, string $operator = null, bool $bind = null, string $join = null);

	/**
	 * @param string $join
	 *
	 * @return $this
	 */
	public function openBracket(string $join = null);

	/**
	 * @return $this
	 */
	public function closeBracket();

}
