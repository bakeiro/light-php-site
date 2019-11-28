<?php

use bakeiro\templateLoader;

class Output
{
    public static $output_scripts = array();
    public static $output_styles = array();

    public static function load($route, $data = array())
    {
        $templateLoader = new templateLoader();

        $content = $templateLoader->load(VIEW . 'template/common/Header.php', $data);
        $content .= $templateLoader->load(VIEW . 'template/' . $route . '.php', $data);
        $content .= $templateLoader->load(VIEW . 'template/common/Footer.php', $data);

        echo $content;
    }

    public static function rawLoad($route, $data = array())
    {
        $templateLoader = new templateLoader();
        $content = $templateLoader->load(VIEW . 'template/' . $route . '.php', $data);
        echo $content;
    }

    public static function adminLoad($route, $data = array())
    {
        $templateLoader = new templateLoader();

        $content = "";

        if (Util::isAjaxRequest()) {
            $content = $templateLoader->load(VIEW . 'template/' . $route . '.php', $data);
        } else {
            $content = $templateLoader->load(VIEW . 'template/common/Header.php', $data);
            $content .= $templateLoader->load(VIEW . 'template/' . $route . '.php', $data);
            $content .= $templateLoader->load(VIEW . 'template/common/Footer.php', $data);
        }

        echo $content;
    }

    public static function addJs($js_route)
    {
        $output_script = "<script src='src/view/www/dist/" . $js_route . ".js?v=" . Config::Get("cache_version") . "' > </script>";
        Output::$output_scripts[] = $output_script;
    }

    public static function addCss($css_route)
    {
        $output_style = "<link href='src/view/www/dist/" . $css_route . ".css?v=" . Config::Get("cache_version") . "' rel='stylesheet'>";
        Output::$output_styles[] = $output_style;
    }
}
