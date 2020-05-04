<?php

require_once "db.class.php";

class product extends db
{
    public  $Model;
    public  $Color;
    public  $Capacity;
    public  $Number;
    public  $Price;
    private $temp;
    private $newname;
    private $open;
    public function up_img($name_img, $tmpname)
    {
        $this->name_img = $name_img;
        $this->tmpname = $tmpname;
        $this->temp = explode('.', $name_img);
        $this->newname = rand(0, rand(1, 32000)) . '.' . end($this->temp);

        move_uploaded_file($tmpname, "img/" . $this->newname);
    }
    public function s_product()
    {
        //     echo $this->Model;
        //     echo '<br>';
        //     echo $this->Color;
        //     echo '<br>';
        //     echo $this->Capacity;
        //     echo '<br>';
        //     echo $this->Number;
        //     echo '<br>';
        //     echo $this->Price;
        //     echo '<br>';


        $this->open = "INSERT INTO Product (Model,Color,Capacity,Number,Price,Img)
        VALUES ('$this->Model', '$this->Color', '$this->Capacity','$this->Number','$this->Price','$this->newname')";

        if ($this->con->query($this->open) == TRUE) {
            echo "<script type='text/javascript'>";
            echo "alert('เพิ่มข้อมูลสำเร็จ');";
            echo "window.location = 'index.php'; ";
            echo "</script>";
        } else {
            echo "<script type='text/javascript'>";
            echo "alert('กรุณากรองข้อมูลใหม่);";
            echo "window.location = 'product.php'; ";
            echo "</script>";
        }
    }
}
