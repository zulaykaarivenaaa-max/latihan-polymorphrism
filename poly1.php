<?php
class hewan {
    public function suara(){
        echo "Hewan mengeluarkan suara";
    }
}

class Kucing extends Hewan {
    public function suara(){
        echo "Meong";
    }
}

class Anjing extends Hewan {
    public function suara(){
        echo "Guk guk";
    }
}

$kucing = new Kucing();
$anjing = new Anjing();

$kucing->suara();
echo"<br><br>";

$anjing->suara();
?>
