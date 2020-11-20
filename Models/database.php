<?php
class Database
{
	public $conn = NULL;
	private $servername = "localhost";
	private $username = "root";
	private $password = "990501";
	private $dbname = "mini_shop";
	function connect() {
		try{ 
			if(is_null($this->conn)) {
				$this->conn = new PDO("mysql:host=localhost;dbname=mini_shop", $this->username, $this->password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING); //truy cập hằng attt_errmode qua lớp pdo
			}
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}	
	}
	function close() {
		if(is_null($this->conn)) {
			$this->conn = NULL;
		}
	}
	function __construct()
	{
		$this->connect();
	}
	function __destruct()
	{
		$this->close();
	}
	function db_execute($sql = '',$params = [])  //in
    {
        if(!is_null($this->conn))
        {
            $result = $this->conn->prepare($sql);
            $result->execute($params);
            if($result->rowCount() > 0) 
                return true;
        }
        return false;
	}
	function db_get_list($sql = '')
    {
        if(!is_null($this->conn))
        {
            $result = $this->conn->prepare($sql);
            $result->execute();
            if($result->rowCount() > 0) 
            {
               while($row = $result->fetch())
               $temp[] = $row;
               return $temp;
            }
        }
        return false;
	}
	function db_get_list_condition($sql = '', $params = []) {
		if(!is_null($this->conn)) {
			$result = $this->conn->prepare($sql);
			$result->execute($params);
			if($result->rowCount() > 0) {
				while($row = $result->fetch())
					$temp[] = $row;
				return $temp;
			}
		}
		return false;
	}
	function db_get_row($sql = '', $params = []) {
		if(!is_null($this->conn)) {
			$result = $this->conn->prepare($sql);
			$result->execute($params);
			if($result->rowCount() > 0) {
				$row = $result->fetch();
				return $row;
			}
		}
		return false;
	}
	function db_numb_row($sql = '') {
		$count = 0;
		if(!is_null($this->conn)) {
			$result = $this->conn->prepare($sql);
			$result->execute();
			return $count = $result->rowCount();
		}
		return false;
	}
	function paging($link, $total_records, $current_page, $limit)
	{    
		$total_page = ceil($total_records / $limit);
		
		// Limit current_page in 1 to total_page
		if ($current_page > $total_page){
			$current_page = $total_page;
		}
		else if ($current_page < 1){
			$current_page = 1;
		}
		
		$start = ($current_page - 1) * $limit;
	
		$html = '<ul class="pagination justify-content-center text-center">';
				
		if ($current_page > 1 && $total_page > 1){
			$html .= '<li class="page-item"><a class="page-link text-dark h-100" href="'.str_replace('{page}', $current_page-1, $link).'"><i class="fas fa-chevron-left"></i></a></li>';
		}
		else {
			$html .= '<li class="page-item disabled"><a class="page-link text-secondary h-100 " href="'.str_replace('{page}', $current_page-1, $link).'"><i class="fas fa-chevron-left"></i></a></li>';
		}
	
		for ($i = 1; $i <= $total_page; $i++){
			if ($i == $current_page){
				$html .= '<li style="width: 35px;" class="page-link bg-dark text-white">'.$i.'</li>';
			}
			else{
				$html .= '<li style="width: 35px;" class="page-item "><a class="page-link text-dark" href="'.str_replace('{page}', $i, $link).'">'.$i.'</a></li>';
			    }
		}
	
		if ($current_page < $total_page && $total_page > 1){
			$html .= '<li class="page-item"><a class="page-link  h-100 text-dark" href="'.str_replace('{page}', $current_page+1, $link).'"><i class="fas fa-chevron-right"></i></a></li></ul>';
		}
		else {
			$html .= '<li class="page-item disabled"><a class="page-link text-secondary h-100" href="'.str_replace('{page}', $current_page+1, $link).'"><i class="fas fa-chevron-right"></i></a></li></ul>';
		}
		
		return array(
			'start' => $start,
			'limit' => $limit,
			'html' => $html
		);
	}
}