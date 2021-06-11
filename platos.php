<?php
class platos
{
    // dbection
    private $db;
    // Table
    private $db_table = "plato";
    // Columns
    public $id;
    public $nombre;
    public $descripcion;
    public $precio;
    public $img;
    public $result;


    // Db 
    public function __construct($db)
    {
        $this->db = $db;
    }

    // GET ALL
    public function traerPlato()
    {
        $sqlQuery = "SELECT id, nombre, descripcion, precio, img FROM " . $this->db_table . "";
        $this->result = $this->db->query($sqlQuery);
        return $this->result;




    }

    // CREATE
    public function crearPlato()
    {
        // sanitize
        $this->nombre = htmlspecialchars(strip_tags($this->nombre));
        $this->descripcion = htmlspecialchars(strip_tags($this->descripcion));
        $this->precio = htmlspecialchars(strip_tags($this->precio));
        $this->img = htmlspecialchars(strip_tags($this->img));
        $sqlQuery = "INSERT INTO
" . $this->db_table . " SET nombre = '" . $this->nombre . "',
descripcion = '" . $this->descripcion . "',
precio = '" . $this->precio . "',img = '" . $this->img . "'";
        $this->db->query($sqlQuery);
        if ($this->db->affected_rows > 0) {
            return true;
        }
        return false;
    }

    // UPDATE
    public function TraerPlatos()
    {
        $sqlQuery = "SELECT id, nombre, descripcion, precio, img FROM " . $this->db_table . "";
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }
    

    // UPDATE
    public function actualizarPlato()
    {
        $this->nombre = htmlspecialchars(strip_tags($this->nombre));
        $this->descripcion = htmlspecialchars(strip_tags($this->descripcion));
        $this->precio = htmlspecialchars(strip_tags($this->precio));
          $this->id = htmlspecialchars(strip_tags($this->id));

        $sqlQuery = "UPDATE " . $this->db_table . " SET nombre = '" . $this->nombre . "',
        descripcion = '" . $this->descripcion . "',
        precio = '" . $this->precio . "'
WHERE id = " . $this->id;

        $this->db->query($sqlQuery);
        if ($this->db->affected_rows > 0) {
            return true;
        }
        return false;
    }

    // DELETE
    function borrarPlato()
    {
        $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = " . $this->id;
        $this->db->query($sqlQuery);
        if ($this->db->affected_rows > 0) {
            return true;
        }
        return false;
    }

    public function TraerUnicoPlato()
    {
        $sqlQuery = "SELECT id, nombre, precio, descripcion, img FROM
" . $this->db_table . " WHERE id = " . $this->id;
        $record = $this->db->query($sqlQuery);
        $dataRow = $record->fetch_assoc();
        $this->nombre = $dataRow['nombre'];
        $this->precio = $dataRow['precio'];
        $this->descripcion = $dataRow['descripcion'];
        $this->img = $dataRow['img'];
    }



}

