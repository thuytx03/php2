<?php
require_once './app/configs/config.php';
class BaseModel
{
	public $table;
	public $queryBuilder;
	public $id;

	// tạo kết nối từ project php sang mysql
	//nếu như dùng để lấy danh sách thì sẽ truyền true còn truyền false thì
	//sẽ chạy được các câu truy vấn như thêm sửa xoá


	public $connect;
	// tạo kết nối từ project php sang mysql
	function getConnect()
	{
		$connect = new PDO(
			"mysql:host=" . DBHOST
				. ";dbname=" . DBNAME
				. ";charset=" . DBCHARSET,
			DBUSER,
			DBPASS
		);
		return $connect;
	}
	public function __construct()
	{
		$this->connect = $this->getConnect();
	}


	// nếu như dùng để lấy danh sách thì sẽ truyền true còn truyền false thì
	//sẽ chạy được các câi truy vấn như thêm sửa xóa
	public function getData($query, $getAll = true)
	{
		$stmt = $this->connect->prepare($query);
		$stmt->execute();
		if ($getAll) {
			return $stmt->fetchAll();
		}

		return $stmt->fetch();
	}

	static function all()
	{
		$model = new static;
		// câu sql
		$query = "select * from " . $model->table;
		// thực thi câu lệnh sql
		$stmt = $model->connect->prepare($query);
		$stmt->execute();
		// lấy toàn bộ dữ liệu trả về từ câu lệnh
		return $stmt->fetchAll();
	}

	static function delete($id)
	{
		$model = new static;
		$query = "delete from " . $model->table . " where id = $id";
		$stmt = $model->connect->prepare($query);
		$stmt->execute();
	}

	public static function resetId($table)
	{
		$model = new static;
		$sql = "SET  @num := 0;
	UPDATE $model->table SET id = @num := (@num+1);
	ALTER TABLE $model->table AUTO_INCREMENT =1;";
		return $model->getData($sql, false);
	}

	/////////////////////////////////////////////////////////////////////////


}
