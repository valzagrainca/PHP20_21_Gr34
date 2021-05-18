<?php
class TypeOneCookiesDefinement {
    protected $cookie_name;
    protected $cookie_value;
    protected $cookie_time;
    private $cookie_path;
    private $cookie_domain;
    private $cookie_secure;
    private $cookie_httponly;

    public function setName($cookie_name) {
        $this->name = $cookie_name;
    }

    public function getName() {
        return $this->name;
    }

    public function setValue($cookie_value) {
        $this->value = $cookie_value;
    }

    public function getValue() {
        return $this->value;
    }

    public function setTime($cookie_time) {
        $this->time = $cookie_time;
    }

    public function getTime() {
        return $this->time;
    }

    public function setPath($cookie_path) {
        $this->path = $cookie_path;
    }

    public function getPath() {
        return $this->path;
    }

    public function __construct($cookie_domain, $cookie_secure, $cookie_httponly) {
        $this->domain = $cookie_domain;
        $this->secure = $cookie_secure;
        $this->httponly = $cookie_httponly;
    }

    public function getDomain() {
        return $this->domain;
    }

    public function getSecure() {
        return $this->secure;
    }

    public function getHttpOnly() {
        return $this->httponly;
    }
}

$cookies1 = new TypeOneCookiesDefinement("localhost", 0, 1);
$cookies1->setName("First");
$cookies1->setValue("Defined");
$cookies1->setTime(time() + 3600);
$cookies1->setPath("/");
// $cookies->setDomain("localhost");
// $cookies->setSecure(0);
// $cookies->setHttpOnly(1);

// echo $cookies->getName(); echo "<br>";
// echo $cookies->getValue(); echo "<br>";
// ...

$cookies2 = new TypeOneCookiesDefinement("localhost", 0, 1);
$cookies2->setName("Second");
$cookies2->setValue("Undefined");
$cookies2->setTime(time() + 3600);
$cookies2->setPath("/");

$cookies3 = new TypeOneCookiesDefinement("localhost", 0, 1);
$cookies3->setName("Third");
$cookies3->setValue("Infinite");
$cookies3->setTime(time() + 3600);
$cookies3->setPath("/");

for ($i = 1; $i <= 3; $i++) {
    setcookie(${"cookies".$i}->getName(), ${"cookies".$i}->getValue(), ${"cookies".$i}->getTime(), ${"cookies".$i}->getPath(), ${"cookies".$i}->getDomain(), 
    ${"cookies".$i}->getSecure(), ${"cookies".$i}->getHttpOnly());
}

// for ($i = 1; $i <= 3; $i++) {
//     setcookie(${"cookies".$i}->getName(), ${"cookies".$i}->getValue(), ${"cookies".$i}->getTime() - 3600, ${"cookies".$i}->getPath(),
//     ${"cookies".$i}->getDomain(), ${"cookies".$i}->getSecure(), ${"cookies".$i}->getHttpOnly());
// }

?>