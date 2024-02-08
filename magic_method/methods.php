<!-- <?php
//__construct
class MyClass {
    public function __construct() {
        echo 'Constructor called.';
    }
}

$obj = new MyClass();  


//__destruct(): Called when an object is about to be destroyed.
class MyClass {
    public function __destruct() {
        echo 'Destructor called.';
    }
}

$obj = new MyClass();
unset($obj); 


//__call(): Called when an inaccessible method is invoked.
class MyClass {
    public function __call($name, $arguments) {
        echo "Calling undefined method $name with arguments: " . implode(', ', $arguments);
    }
}

$obj = new MyClass();
$obj->undefinedMethod('arg1', 'arg2');  


//__callStatic(): Called when an inaccessible static method is invoked.
class MyClass {
    public static function __callStatic($name, $arguments) {
        echo "Calling undefined static method $name with arguments: " . implode(', ', $arguments);
    }
}

MyClass::undefinedStaticMethod('arg1', 'arg2');  


//__get(): Called when an inaccessible property is accessed.
class MyClass {
    private $data = ['name' => 'John'];

    public function __get($name) {
        return $this->data[$name] ?? null;
    }
}

$obj = new MyClass();
echo $obj->name; 


//__set(): Called when an inaccessible property is set.
class MyClass {
    private $data = [];

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
}

$obj = new MyClass();
$obj->age = 25;
echo $obj->age;  


//__isset(): Called when isset() is used on an inaccessible property.
class MyClass {
    private $data = ['name' => 'John'];

    public function __isset($name) {
        return isset($this->data[$name]);
    }
}

$obj = new MyClass();
var_dump(isset($obj->name));  


//__unset(): Called when unset() is used on an inaccessible property.
class MyClass {
    private $data = ['name' => 'John'];

    public function __unset($name) {
        unset($this->data[$name]);
    }
}

$obj = new MyClass();
unset($obj->name);
echo $obj->name;  


//__sleep(): Called before object serialization.
class MyClass {
    private $name = 'John';

    public function __sleep() {
        return ['name'];
    }
}

$obj = new MyClass();
$serialized = serialize($obj);
var_dump($serialized);  


//__wakeup(): Called during object unserialization.
class MyClass {
    private $name;

    public function __wakeup() {
        $this->name = strtoupper($this->name);
    }
}

$serialized = 'O:8:"MyClass":1:{s:4:"name";s:4:"john";}';
$obj = unserialize($serialized);
echo $obj->name;  


//__serialize(): Called during serialization for custom serialization.
class MyClass {
    private $name = 'John';

    public function __serialize(): array {
        return ['name' => strtoupper($this->name)];
    }
}

$obj = new MyClass();
$serialized = serialize($obj);
var_dump($serialized); 


//__unserialize(): Called during unserialization for custom unserialization.
class MyClass {
    private $name;

    public function __unserialize(array $data): void {
        $this->name = strtoupper($data['name']);
    }
}

$serialized = 'O:8:"MyClass":1:{s:4:"name";s:4:"john";}';
$obj = unserialize($serialized);
echo $obj->name;  


//__toString(): Called when an object is converted to a string.
class MyClass {
    public function __toString() {
        return 'This is a MyClass object.';
    }
}

$obj = new MyClass();
echo $obj;  


//__invoke(): Called when an object is used as a function.
class MyClass {
    public function __invoke($param) {
        echo "Object invoked with parameter: $param";
    }
}

$obj = new MyClass();
$obj('example');  


//__set_state(): Called for classes exported by var_export().
class MyClass {
    public $name = 'John';

    public static function __set_state($data) {
        $obj = new self();
        $obj->name = $data['name'] ?? null;
        return $obj;
    }
}

$obj = new MyClass();
$exported = var_export($obj, true);
eval('$newObj = ' . $exported . ';');
echo $newObj->name;


//__clone(): Called when an object is cloned.
//class MyClass {
   // public $name = 'John';

   // public function __clone() {
        $this->name = 'Cloned ' . $this->name;
    //}
//}

$obj = new MyClass();
$cloneObj = clone $obj;
echo $cloneObj->name;  


//__debugInfo(): Called when var_dump() is used on an object.
class MyClas {
    private $name = 'John';

    public function __debugInfo() {
        return ['debugName' => strtoupper($this->name)];
    }
}

$obj = new MyClass();
var_dump($obj);
?> -->