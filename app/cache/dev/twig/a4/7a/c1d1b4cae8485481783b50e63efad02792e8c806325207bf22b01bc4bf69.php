<?php

/* TimelineBundle:Post:new.html.twig */
class __TwigTemplate_a47ac1d1b4cae8485481783b50e63efad02792e8c806325207bf22b01bc4bf69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("TimelineBundle:Post:index.html.twig");
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
        return "TimelineBundle:Post:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div style = \"color: #fff; font-family: Monotype Corsiva; background-color:#002a80; font-size: 28px; font-weight: bold; height: 45px; border: 2px solid; border-radius: 2px;\">        

        <center>Create your Post</center>
        <hr style = \"width:100%; height:2px; background: #002a80\"/>

    </div>
    <br><br>

    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "


    <br>
    <div align=\"center\">
    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("post");
        echo "\" style = \"font-size: 15px\" >
        <i> <p align=\"center\" style=\"width: 20%; font: bold 15px Arial;   text-decoration: none;   background-color: #EEEEEE;   color: #333333;   padding: 2px 6px 2px 6px;   border-top: 1px solid #CCCCCC;   border-right: 1px solid #333333;   border-bottom: 1px solid #333333; border-left: 1px solid #CCCCCC;\">
                Back to Timeline</p></i></a>  

    </div>




";
    }

    public function getTemplateName()
    {
        return "TimelineBundle:Post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  49 => 14,  39 => 6,  36 => 5,  11 => 2,);
    }
}
