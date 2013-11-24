<?php
class Template {

    const TEMPLATE_PATH = 'application/view/';
    const LAYOUT_FOLDER = 'layouts/';
    const PARTIALS_FOLDER = 'partials/';

    protected $data = array();
    protected $content = array();
    protected $partials = array();
    protected $layoutfile;
    private $pagetitle;

    // on instantiation: check the layoutfile
    public function __construct($layoutfile = 'default')
    {
        $layoutfile = self::LAYOUT_FOLDER . $this->addExtension($layoutfile);

        if (file_exists(self::TEMPLATE_PATH . $layoutfile)) {
            $this->layoutfile = self::TEMPLATE_PATH . $layoutfile;
        } else {
            error_log("not found: $layoutfile");
            exit;
        }
    }

    // render the main content of the site
    // while rendering the layout, render the partials as well
    public function render($templatefile)
    {
        $templatefile = $this->addExtension($templatefile);

        if (file_exists(self::TEMPLATE_PATH . $templatefile)) {
            $this->content = $this->renderView(self::TEMPLATE_PATH . $templatefile);
        } else {
            error_log("not found: $templatefile");
            exit;
        }

        $this->renderLayout();
    }

    // helper to display the content in the layout template
    public function getContent()
    {
        echo $this->content;
    }

    // first stap generate partial
    public function renderPartial($name)
    {
        if (array_key_exists($name, $this->partials)) {
            echo $this->renderView($this->partials[$name]);
        } else {
            error_log("partial not rendered: $name");
        }
    }

    // second step: generate the layout
    public function renderLayout()
    {
        include($this->layoutfile);
    }

    // helper to generate a partial
    public function setPartial($partialname, $partialfile = '')
    {
        // if $partialfile is not set, use the partialname as filename
        $partialfile = ($partialfile) ? $partialfile : $partialname;

        $partialfile = self::TEMPLATE_PATH . self::PARTIALS_FOLDER . $this->addExtension($partialfile);

        if (file_exists($partialfile)) {
            $this->partials[$partialname] = $partialfile;
        } else {
            error_log("not found: $partialfile");
            exit;
        }

        return $this;
    }

    // render a view (partial or main content)
    private function renderView($view)
    {
        // we are cheating here, creating an output buffer to get a rendered partial and store its content in a var.
        ob_start();
        include($view);
        $data = ob_get_contents();
        ob_end_clean();
        return $data;
    }

    public function setPagetitle($title)
    {
        $this->pagetitle = $title;
    }

    public function getPagetitle()
    {
        return $this->pagetitle;
    }

    // helper to add extension to a partial or layout filename
    private function addExtension($filename)
    {
        return (substr($filename, -4) == '.php') ? $filename : $filename . '.php';
    }

    // automatic getter and setter, remapping every value to the protected attribute
    // read more about this on www.php.net/manual/en/language.oop5.overloading.php
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {

        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return false;
    }
}

