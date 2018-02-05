<?php

class template
{
    var $view = '';
    var $content = false;
    var $vars = array();

    public function __construct($view)
    {
        $this->view = $view;    // set view's name
        $this->loadFile();      // load view's contents
    }


    // Get view's contents
    function readFile($view){
//        $fp = fopen($f, 'rb');
//        $this->content = fread($fp, filesize($f));
//        fclose($fp);
        $this->content = file_get_contents($view);
    }


    // Load contents
    function loadFile(){

        // Exit if directory for views doesn't exist
        if(!is_dir(VIEWS_DIR)){
            echo 'Kataloogi '.VIEWS_DIR.' ei leitud!<br>';
            exit;
        }

        // Get view's contents if it's a proper file
        // Try different nameforms for view until one calls readFile (or doesn't)
        // it's all the same code.. that ain't right... yet can't use a function (error "not in object context")
        //Form:      views/myview.html
        $view = $this->view;
        if(file_exists($view) and is_file($view) and is_readable($view)){
            $this->readFile($view);
        }
        //Form:      myview.html
        $view = VIEWS_DIR.$this->view;
        if(file_exists($view) and is_file($view) and is_readable($view)){
            $this->readFile($view);
        }
        //Form:      myview
        $view = VIEWS_DIR.$this->view.'.html';
        if(file_exists($view) and is_file($view) and is_readable($view)){
            $this->readFile($view);
        }
        //Form:      somefolder.myview -> views/somefolder/myview.html
        $view = VIEWS_DIR.str_replace('.', '/', $this->view).'.html';
        if(file_exists($view) and is_file($view) and is_readable($view)){
            $this->readFile($view);
        }

        // If view's content hasn't been set
        if($this->content === false){
            echo 'Ei suutnud lugeda faili '.$this->view.'<br>';
        }
    }


    // Set view's variables
    function set($viewVar, $value){
        $this->vars[$viewVar] = $value;
    }
}
