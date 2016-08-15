<?php

require_once __DIR__ . '/Model.php';

class Item extends Model
{
	protected static $table = 'items';

	public function __set($name, $value)
	{
		parent::__set($name, $value);
	}

	public function user() {
		return User::find($this->user_id);
	}

	public static function getUserItems($id)
	{
		self::dbConnect();
		$query = 'SELECT * FROM ' . self::$table . ' WHERE user_id = :user_id ORDER BY id DESC';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':user_id', intval($id), PDO::PARAM_INT);
		$stmt->execute();
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$instance = null;

		if ($results)
		{
			$instance = new static;
			$instance->attributes = $results;
		}

		return $instance;
	}

	

	public static function featuredItems($num = 5) {
		self::dbConnect();

		$query = 'SELECT * FROM ' . self::$table . ' ORDER BY id desc LIMIT ' . $num;
		$stmt = self::$dbc->prepare($query);
		$stmt->execute();
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$instance = null;

		if ($results)
		{
			$instance = new static;
			$instance->attributes = $results;
		}

		return $instance;
	}

//  	public static function pagination()
//     {
//         self::dbConnect();
//         $page = Input::get('page', 1);
//         $limit = 5;
//         $offset = ($page * $limit) - $limit;
//         $sql= "SELECT * FROM items LIMIT :count OFFSET :shift";
//         $stmt = self::$dbc->prepare($sql);
//         $stmt->bindValue(':count', $limit, PDO::PARAM_INT);
//         $stmt->bindValue(':shift', $offset, PDO::PARAM_INT);
//         $stmt->execute();
//         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//         $instance = null;
//         if ( $results )
//         {
//             $instance = new static;
//             $instance->attributes = $results;
//         }
//         return $instance;
//     }

//  	public static function featured()
//     {
//         self::dbConnect();
//         $page = Input::get('page', 1);
//         $limit = 5;
//         $offset = ($page * $limit) - $limit;
//         $sql= "SELECT * FROM items WHERE id = 1 OR id = 2 OR id = 3 LIMIT :count OFFSET :shift";
//         $stmt = self::$dbc->prepare($sql);
//         $stmt->bindValue(':count', $limit, PDO::PARAM_INT);
//         $stmt->bindValue(':shift', $offset, PDO::PARAM_INT);
//         $stmt->execute();
//         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//         $instance = null;
//         if ( $results )
//         {
//             $instance = new static;
//             $instance->attributes = $results;
//         }
//         return $instance;
//     }
// }    
}
 ?>
