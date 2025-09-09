<?php
  include_once __DIR__ . "/../connect.php";

class GedungModel extends Connection
{
        protected $name;
        protected $price;
        protected $stock;

    public function findAll()
    {
        $sql = "SELECT * FROM gedung";
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $product[] = $data;
            }   
            return $product;
        }
    }

    protected function findOne($id)
    {
        $sql = "SELECT * FROM gedung WHERE id = " . $id;
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $product[] = $data;
            }
            return $product;
        }   
    }
}
?>