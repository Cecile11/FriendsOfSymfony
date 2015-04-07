<?php

/* TimelineBundle:Post:show.html.twig */
class __TwigTemplate_e13fc0edf4acfb6ebe6c5dc2f990ddae18f2d7a37a89f4bb90c4d6253acf0c32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("TimelineBundle:Post:myposts.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TimelineBundle:Post:myposts.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1 style=\"color: black; font-family: Times new roman; font-size: 20px; background-color: #FAFAD2;\">Here's your Post</h1>


    <tbody>

    <div style = \"background-color: #FAFAD2; box-shadow: 6px 6px 5px #888888;\">
        <br>
        <tr>
            <td> <p style =\"color:black; font-family: Times New Roman; font-size: 15px; \">&nbsp &nbsp";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "text", array()), "html", null, true);
        echo " </p></td>
        </tr>
        <tr>
        <i>
            <td> <p align=\"right\">
                ";
        // line 18
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>&nbsp &nbsp&nbsp&nbsp
            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "time", array()), "H:i:s"), "html", null, true);
        echo "&nbsp &nbsp &nbsp &nbsp</p></td>
        </i>
    </tr>
    <tr>
        ";
        // line 23
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array())) {
            // line 24
            echo "            <td><center><img src= \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array())), null, true), "html", null, true);
            echo "\" width = 900px; height= 500px;></center></td>
        ";
        }
        // line 26
        echo "</tr>
</tbody>


<br><center><i>
        <a href=\"/post/";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo "/myposts\">
            <i> <p align=\"center\" style=\"width: 20%; font: bold 15px Arial;   text-decoration: none;   background-color: #EEEEEE;   color: #333333;   padding: 2px 6px 2px 6px;   border-top: 1px solid #CCCCCC;   border-right: 1px solid #333333;   border-bottom: 1px solid #333333; border-left: 1px solid #CCCCCC;\">

                    To My Posts</a> &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp  <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
                </p></i>
        </center></i>


    ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    <br>
";
    }

    public function getTemplateName()
    {
        return "TimelineBundle:Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 39,  91 => 34,  85 => 31,  78 => 26,  72 => 24,  70 => 23,  63 => 19,  57 => 18,  49 => 13,  39 => 5,  36 => 4,  11 => 2,);
    }
}
