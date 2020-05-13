<?php

/**
 * Class Html
 * Permet de générer une page html rapidement
 */

class Html{

    /**
     * @var string $lang the language in which the page is written
     */
    private $lang = "en";

    /**
     * @var string $charset is the encoding of the characters
     */
    private $charset = "UTF-8";

    /**
     * @var string $name_meta 
     */
    private $name_meta = "viewport";

    /**
     * @var string $content basics parameters for a responsive page
     */
    private $content = "width=device-width, initial-scale=1.0";


    //Est-ce que ce constructeur sert à quelque chose ?
    /**
     * @param string like those above
     */
    public function __construct($lang, $charset, $name_meta, $content){
        $this->lang = $lang;
        $this->charset = $charset;
        $this->name_meta = $name_meta;
        $this->content = $content;
    }

    /**
     * create the doctype tag
     */
    public function Doctype(){
        return '<DOCTYPE html>';
    }

    /**
     * @param array $main content of the html tags
     * create the html tags with the lang attribute
     */
    public function html($main){
        return '<html lang="' . $lang . '">' . $main . '</html>';
    }

    /**
     * @param array $main content of the head tags
     * create the head tags
     */
    public function head($main){
        return '<head>' . $main . '</head>' ;
    }

    /**
     * create the meta tag with the charset attribute
     */
    public function meta_char(){
        return '<meta charset="' . $charset . '">';
    }

    /**
     * create the meta tag with name and content attributes (viewport, scale for a responsive page)
     */
    public function meta_device(){
        return '<meta name="' . $name_meta . '" content="' . $content . '">';
    }

    /**
     * @param string $rel the type of link
     * @param string $href the address of the link (url or location in file system)
     * create a link tag with rel and href attributes
     */
    public function link($rel, $href){
        return '<link rel="' . $rel . '" href ="' . $href . '">';
    }

    /**
     * @param string $title title of the document
     * create the title tags
     */
    public function title($title){
        return '<title>' . $title . '</title>';
    }

    /**
     * @param array $main content of the body tags
     * return the body tags
     */
    public function body($main){
        return '<body>' . $main . '</body>';
    }

    /**
     * @param string $src the source of the image (url or loacation in file system)
     * @param string $alt a description of the image for blinds people
     * create an img tag with the src and alt attributes
     */
    public function img($src, $alt){
        return '<img src="' . $src . '" alt="' . $alt . '">';
    }

    /**
     * @param string $href the adress of the link (url, ...)
     * @param string $name_link content of the a tags
     * create <a href="..."></a> tags with the href attribute
     */
    public function a($href, $name_link){
        return '<a href="' . $href . '">' . $name_link . '</a>';
    }

    /**
     * @param string $src the source of the script (url or location in file system)
     * create the script tags with the attribute src
     */
    public function script($src){
        return '<script src="' . $src . '"></src>';
    }

}
?>