<?php

namespace MareiClasses\CountryAssets;

class CountryAssets{

	/**
	 * An array that holds some items such as areas, governorates, etc.
	 *
	 * @var array $items
	 */
	protected static $items = [];

	/**
	 * Find an item in items array by its index
	 *
	 * @param  integer  $index
	 * @return string
	 */
	public static function find($index = 0){
		return static::$items[$index];
	}

	/**
	 * Get all items array.
	 *
	 * @return array
	 */
	public static function get(){
		return static::$items;
	}

	/**
	 * Counting items inside the array.
	 *
	 * @return integer
	 */
	public static function count(){
		return count(static::$items);
	}

	/**
	 * Get the first item in items array.
	 *
	 * @return string
	 */
	public static function first(){
		// if items array is not empty return the first item, otherwise return null.
		return static::count()? static::$items[0] : null;
	}

	/**
	 * Get the last item in items array.
	 *
	 * @return string
	 */
	public static function last(){
		// hold the number of items.
		$count = static::count();

		// if items array is not empty return the last item, otherwise return null
		return $count ? static::$items[$count-1] : null;
	}

	/**
	 * adding a new item to items array.
	 *
	 * @param  string  $str
	 * @return void
	 */
	public static function append($str){
		static::$items[] = $str;
	}

	/**
	 * Check if item exists inside items array.
	 *
	 * @param  string  $str
	 * @return boolean
	 */
	public static function exists($str){
		return in_array($str, static::$items);
	}
}