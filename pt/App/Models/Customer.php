<?php
declare(strict_types = 1);

namespace App\Models;

use Core\Connection;

class Customer
{ 
    public $table;

    public function __construct($table)
    {
        $this->table = $table;
        try {
        	$pdo = Connection::getInstance();
            $this->pdo = $pdo;
        	Connection::setCharsetEncoding();          
        } catch (Exception $e) {
	        print $e->getMessage();          
        }
    }

    public function index()
    {
	    $sql = "SELECT * FROM {$this->table} ORDER BY id DESC";
	    $query = $this->pdo->prepare($sql);
	    $query->execute();
        return $query->fetchAll();
    }

    public function create($name, $age)
    {
        $sql = "INSERT INTO {$this->table} (name, age) VALUES (:name, :age)";
        $query = $this->pdo->prepare($sql);
        $parameters = array(":name" => $name, ":age" => $age);
        $query->execute($parameters);
    }

    public function edit($field_id)
    {
        $sql = "SELECT id, name, age FROM {$this->table} WHERE id = :field_id LIMIT 1";
        $query = $this->pdo->prepare($sql);
        $parameters = array(':field_id' => $field_id);
        $query->execute($parameters);
        return ($query->rowCount() ? $query->fetch() : false);
    }

    public function update($name, $age, $field_id)
    {
        $sql = "UPDATE {$this->table} SET name = :name, age = :age WHERE id = :field_id";
        $query = $this->pdo->prepare($sql);
        $parameters = array(':name' => $name, ':age' => $age, ':field_id' => $field_id);
        $query->execute($parameters);
    }

    public function delete($field_id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = :field_id";
        $query = $this->pdo->prepare($sql);
        $parameters = array(':field_id' => $field_id);
        $query->execute($parameters);
    }    

    public function search($keyword)
    {
        $sql = "select * from {$this->table} WHERE name LIKE :keyword order by id";
        $sth = $this->pdo->prepare($sql);
        $sth->bindValue(":keyword", "%".$keyword."%");
        $sth->execute();
        $rows =$sth->fetchAll();
        return $rows;
    }   
}
