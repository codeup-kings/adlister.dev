<?php

class Item extends Model
{
	protected static $table = 'items';

	public function user() {
		return User::find($this->user_id);
	}

	public static function getUserItems($id)
	{
		self::dbConnect();
		$query = 'SELECT * FROM ' . self::$table . 'WHERE user_id = :user_id ORDER BY id DESC';
		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':user_id', $id, PDO::PARAM_INT);
		$stmt->execute();
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		if ($results)
		{
			$instance = new static;
			$instance->attributes = $results;
		}

		return $instance;
	}

	public function featuredItems() {
		self::dbConnect();

		$query = 'SELECT * FROM ' . self::$table . ' ORDER BY id LIMIT 4';
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
}