<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_981cd24d1fb34b1bab9fb44149850a37eb343c80356d892b2a1c6fc8ea09c6a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>Friends</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/user/css/bootstrap.css", null, true), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/user/css/friends.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>    
        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "    </head>

    <body background = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/user/images/blue.jpg"), "html", null, true);
        echo "\" >   
        <div id=\"motto\">
            <img src= \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/user/images/friends.png", null, true), "html", null, true);
        echo "\">
            <br>
            <center> <b> Gossips at CSE!!! </b> </center>
        </div>

            <div class=\"content\" style=\"width: 360px\">
            <div style=\"padding: 30px;\">
                ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "            </div>
            
        </div>
    </body>

</html>











";
    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "                    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 25
        echo "                ";
    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  101 => 25,  98 => 24,  95 => 23,  90 => 11,  69 => 26,  67 => 23,  57 => 16,  52 => 14,  48 => 12,  46 => 11,  41 => 9,  37 => 8,  33 => 7,  27 => 4,  22 => 1,);
    }
}
