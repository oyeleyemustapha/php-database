<?php
/**
 * Interface ResultInterface
 *
 * @filesource   ResultInterface.php
 * @created      13.01.2018
 * @package      chillerlan\Database
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2018 Smiley
 * @license      MIT
 */

namespace chillerlan\Database;

use chillerlan\Traits\EnumerableInterface;

interface ResultInterface extends EnumerableInterface{

	/**
	 * Result constructor.
	 *
	 * @param iterable|null $data
	 * @param string|null   $sourceEncoding
	 * @param string        $destEncoding
	 */
	public function __construct(iterable $data = null, string $sourceEncoding = null, string $destEncoding = null);

	/**
	 * @param bool|null $prettyprint
	 *
	 * @return string
	 */
	public function __toJSON(bool $prettyprint = null):string;

	/**
	 * @param \chillerlan\Database\Result $DBResult
	 *
	 * @return \chillerlan\Database\Result
	 */
	public function __merge(Result $DBResult):Result;

	/**
	 * @param int $size
	 *
	 * @return array
	 */
	public function __chunk(int $size):array;

	/**
	 * @return array
	 */
	public function __fields():array;

	/**
	 * @param bool|null $to_array
	 *
	 * @return array
	 */
	public function __values(bool $to_array = null):array;

	/**
	 * @param string      $column
	 * @param string|null $index_key
	 *
	 * @return array
	 */
	public function __column(string $column, string $index_key = null):array;

}
