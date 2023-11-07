<?php
<<<<<<< HEAD

include("autoLoad.php");

use Library\Helper\Calculator;
use Library\Helper\Math;

$calc = new Calculator;
$math = new Math;

echo $calc->add([1, 2]);
echo "<br>";
echo $math->add(3);
=======
class Model
{
    public function save()
    {
        echo "Saving $this->name and $this->age";
    }
}

class Repository
{
    public function update($data)
    {
        $name = $data['name'] ?? "Unknown";
        $age = $data['age'] ?? "Unknown";
        $model = new Model;
        $model->name = $name;
        $model->age = $age;
        $model->save();
    }
}

class App
{
    private $repo;
    public function __construct(Repository $repo)
    {
        $this->repo = $repo;
    }
    public function update($data)
    {
        $this->repo->update($data);
    }
}

$app = new App(new Repository);
$app->update(["name" => "Alice", "age" => 22]);
// Saving Alice and 22
>>>>>>> c9f60ded41ae2551442851e76b74f10961737b72
