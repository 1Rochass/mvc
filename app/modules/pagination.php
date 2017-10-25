<?php
/*
//app/modules/

Pagination::setTableName($tableName);
Pagination::setRangeRows($rangeRows);
Pagination::setPageNumber($pageNumber);
Pagination::showPages();

*/
//namespace app\modules;

class Pagination
{
	static $tableName;
	static $countRows;
	static $countPages;
	static $pageNumber;
	static $firstLimitRows = 0;
	static $lastLimitRows = 10;
	static $rangeRows = 10;
	
	//PaginationBuilder
	static function setTableName($tableName)
	{
		self::$tableName = $tableName;
	}
	static function setRangeRows($rangeRows)
	{
		self::$rangeRows = $rangeRows;
	}
	static function setPageNumber($pageNumber)
	{
		self::$pageNumber = $pageNumber;
	}

	// main function
	static function showPages()
	{
		// RedBeanPHP
		R::setup('mysql:host=localhost;dbname=mvc', 'root', 'toor');
		R::dispense('articles');

		// Counting rows in table 
		if (empty(self::$countRows)) {
			self::countRows(self::$tableName);
		}
		// Counting pages depending on $rangeRows and rounding it
		self::$countPages = ceil(self::$countRows / self::$rangeRows);

		// Start with page $pageNumber WARNING we are minus $pageNumber by 1 
		// because page 2 begin at 11, 12, ... not 21,22,...
		if (self::$pageNumber != null) {
			// Make Limit 1
		 	self::$firstLimitRows = (self::$pageNumber - 1) * self::$rangeRows;		
			// Make Limit 2
			self::$lastLimitRows = self::$firstLimitRows + self::$rangeRows;
		 } 

		// Show rows
		 // self:: does't work at mysql query
		 $firstLimitRows = self::$firstLimitRows;
		 $lastLimitRows = self::$lastLimitRows;
		 // Get all rows
		 $data['articles'] = R::getAll("SELECT * FROM `articles` LIMIT $firstLimitRows, $lastLimitRows");
		 // Get count of pages, make array of pages for Twig
		 for($i = 1; $i <= self::$countPages; $i++){
		 	$data['countPages'][] = $i;	
		 }
		 // Return data
		 return $data;	
	}

	//Counting rows in table
	static function countRows($tableName)
	{
		self::$countRows = R::count('articles');
	}
}