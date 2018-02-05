<?php

class template
{
    var $view = '';
    var $content = false;
    var $viewVars = array();

    public function __construct($view)
    {
        $this->view = $view;    // set view's name  (loadFile() filecheck expects identically-named html file, eg 'new template('main') expects main.html
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

        // Get view's contents if it's a proper file (eg  main.html  for  new template('main')
        // Try different nameforms for view until one calls readFile (or doesn't)
        $viewForms = array(
            $this->view,                            //Form:     views/myview.html
            VIEWS_DIR.$this->view,                  //Form:     myview.html
            VIEWS_DIR.$this->view.'.html',          //Form:     myview
            VIEWS_DIR.str_replace('.', '/', $this->view).'.html');      //Form:      myviewfolder.myview -> views/myviewfolder/myview.html  (eg  menu.menu  or  menu.item)

        foreach ($viewForms as $viewForm) {
            if(file_exists($viewForm) and is_file($viewForm) and is_readable($viewForm)){
                $this->readFile($viewForm);
            }
        }

        // If view's content hasn't been set
        if ($this->content === false){
            echo 'Ei suutnud lugeda faili '.$this->view.'<br>';
        }
    }


    // Set view's default/starting variables
    function set($viewVar, $value){
        $this->viewVars[$viewVar] = $value;
    }


    // Add more variables to view
    // If var exists, simply concatenate the new value
    function add($viewVars, $value){
        if(!isset($this->vars[$viewVars])){
            $this->set($viewVars, $value);
        } else {
            $this->vars[$viewVars] = $this->vars[$viewVars].$value;
        }
    }


    // Parse real content - replace template placeholders with view variables
    // eg {user} with Kasutaja
    function parse(){
        $content = $this->content;
        foreach ($this->viewVars as $viewVar => $value){
            // Get contents and replace matching strings between {} with values corresponding view variables
            $content = str_replace('{'.$viewVar.'}', $value, $content);
        }
        return $content;
    }
}
