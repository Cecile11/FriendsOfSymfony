<?php

/* TimelineBundle:Post:show_post.html.twig */
class __TwigTemplate_fa88fb423a107f94f170c4ac8a51feac126cbd2cf93591542440b6a6afd3bec5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("TimelineBundle:Default:index.html.twig");
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
        return "TimelineBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div style = \"color: #fff; font-family: Monotype Corsiva; background-color:#002a80; font-size: 30px; font-weight: bold; height: 50px; border: 2px solid; border-radius: 2px;\">        

        <center>View Post</center>
        <hr style = \"width:100%; height:2px; background: #002a80\"/>

    </div>
    <br>
    <br>

    <tbody>
    <div style = \"background-color: #FAFAD2; box-shadow: 6px 6px 5px #888888;\">
        <br>



        <tr>
        <i>
            <td> <p align=\"right\">
                ";
        // line 23
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>&nbsp &nbsp&nbsp&nbsp
            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "time", array()), "H:i:s"), "html", null, true);
        echo "&nbsp &nbsp &nbsp &nbsp</p></td>
        </i>
    </tr>

    <tr>
        <td> <p style =\"font-family: Times New Roman; font-size: 15px; color: black \">&nbsp &nbsp";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "text", array()), "html", null, true);
        echo " </p></td>
    </tr>

    <tr>
        ";
        // line 33
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array())) {
            // line 34
            echo "            <td><center><img src= \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array())), null, true), "html", null, true);
            echo "\" width=500px; height= 500px;></center></td>
        ";
        }
        // line 36
        echo "</tr>

<tr>
    <td>
<br><center></i>
    </tbody>


    <a href=\"/timeline\"><i> <p align=\"center\" style=\"width: 20%; font: bold 15px Arial;   text-decoration: none;   background-color: #EEEEEE;   color: #333333;   padding: 2px 6px 2px 6px;   border-top: 1px solid #CCCCCC;   border-right: 1px solid #333333;   border-bottom: 1px solid #333333; border-left: 1px solid #CCCCCC;\">
                Back to Timeline</p></i></a>                      

    <br>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TimelineBundle:Post:show_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 36,  82 => 34,  80 => 33,  73 => 29,  65 => 24,  59 => 23,  39 => 5,  36 => 4,  11 => 2,);
    }
}
