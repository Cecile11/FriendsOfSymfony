<?php

/* TimelineBundle:Default:index.html.twig */
class __TwigTemplate_46158a49b6ea5192256e72f08e62ef3801bde840b9deae4e7d04b399315efd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'user' => array($this, 'block_user'),
            'post' => array($this, 'block_post'),
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
        <title>Friends Timeline</title>
        ";
        // line 8
        echo "        ";
        // line 9
        echo "        ";
        // line 10
        echo "        ";
        // line 11
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/user/css/bootstrap.css", null, true), "html", null, true);
        echo "\" rel=\"stylesheet\" />
          
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/timeline/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/timeline/css/timeline.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>    
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/timeline/css/friends.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>    
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/timeline/css/profile.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>    
        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/timeline/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 21
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "</head>

<body style=\"background-color: #99C2D6\" >  
";
        // line 25
        echo " 
    <div id=\"motto\">
        <img src= \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/user/images/friends.png", null, true), "html", null, true);
        echo "\">
        <br>
        <center> <b> Gossips at CSE!!! </b> </center>
    </div>



    <div class=\"content\" style=\"width: 1000px; background-color: #EBF3F7\">
        <div class=\"links\">
            <table border='0' style=\" width: 1000px; margin-top: 15px; margin-right: 5px; background-color: #CCCCFF\">
                <tr>
                    <td align =\"center\">
                        <a href=\"/timeline\"><b>TIMELINE</b></a>
                    </td>
                    <td align =\"center\">
                        <a href=\"/post/";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo "/myposts\"><b>MY POSTS</b></a>
                    </td>
                    <td align =\"center\">
                        <a href=\"/profile\"><b>ACCOUNT</b></a>
                    </td>
                    <td align =\"center\">
                        <a href=\"/logout\"><b>LOGOUT</b></a>
                    </td>
                </tr>
            </table>
        </div>



        <div style=\"padding:  30px; padding-bottom: 0px; color: #0077b3; font-size: 20px; font-weight: bold\">
            ";
        // line 57
        $this->displayBlock('user', $context, $blocks);
        // line 60
        echo "        </div>

        <div style=\"padding: 30px; padding-top: 15px; padding-bottom: 5px;\" >
            ";
        // line 63
        $this->displayBlock('post', $context, $blocks);
        // line 65
        echo "        </div>

        <div style=\"padding:  30px; padding-top: 5px; padding-bottom: 5px; color: #0077b3; font-size: 14px; font-weight: bold\">

            ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "    </div>

</div>
</body>

</html>















";
    }

    // line 21
    public function block_head($context, array $blocks = array())
    {
    }

    // line 57
    public function block_user($context, array $blocks = array())
    {
        echo "                 
                <center>Hello ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ", Welcome to CSE Friends Gossips page!</center>
            ";
    }

    // line 63
    public function block_post($context, array $blocks = array())
    {
        // line 64
        echo "            ";
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        // line 70
        echo "            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        echo "  
        ";
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TimelineBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 70,  185 => 69,  181 => 64,  178 => 63,  172 => 58,  167 => 57,  162 => 21,  137 => 72,  135 => 69,  129 => 65,  127 => 63,  122 => 60,  120 => 57,  102 => 42,  84 => 27,  80 => 25,  75 => 22,  73 => 21,  68 => 19,  63 => 17,  59 => 16,  55 => 15,  51 => 14,  47 => 13,  41 => 11,  39 => 10,  37 => 9,  35 => 8,  29 => 4,  24 => 1,);
    }
}
