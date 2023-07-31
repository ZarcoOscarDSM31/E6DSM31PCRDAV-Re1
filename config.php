<!-- <?php 
$base_url = "http://" . $_SERVER['SERVER_NAME'] 
?>
 -->
<?php
trait URL {
    /* declaros 3 variables 2 privadas y una publica  */
    private $url = '';
    private $current_url = '';
    public $get = '';

    function __construct()
    {
        $this->url = $_SERVER['SERVER_NAME'];
        $this->current_url = $_SERVER['REQUEST_URI'];

        $clean_server = str_replace('', $this->url, $this->current_url);
        $clean_server = explode('/', $clean_server);

        $this->get = array('base_url' => "/".$clean_server[1]);
    }
}
    
?>