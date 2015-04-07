<?php

/* TimelineBundle:Post:index.html.twig */
class __TwigTemplate_269566e3f036f27987b30b0f886da8e0d3d4fbe3a2ba3a6d3ed5814feb58440a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("TimelineBundle:Default:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<div style = \"color: #fff; font-family: Monotype Corsiva; background-color:#002a80; font-size: 28px; font-weight: bold; height: 45px; border: 2px solid; border-radius: 2px;\">        

        <center>Timeline</center>
        <hr style = \"width:100%; height:2px; background: #002a80\"/>

    </div>
    <br>
    <div align=\"right\">
        <br>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("post_new");
        echo "\"  style = \"font-size:20px;\">
            <i> <p align=\"center\" style=\"width: 20%; font: bold 15px Arial;   text-decoration: none;   background-color: #EEEEEE;   color: #333333;   padding: 2px 6px 2px 6px;   border-top: 1px solid #CCCCCC;   border-right: 1px solid #333333;   border-bottom: 1px solid #333333; border-left: 1px solid #CCCCCC;\">
                    Create a new entry</p></i>
        </a>
    </div>


    <tbody>
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "        <div style = \"background-color: #FAFAD2; box-shadow: 6px 6px 5px #888888;\">

            <tr>
                <td> <p style =\"font-family: Times New Roman; font-size: 20px; background-color: #CCCCFF\">&nbsp &nbsp";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo " </p></td>
            </tr>

            <tr>
            <i>
                <td> <p align=\"right\">
                    ";
            // line 37
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>&nbsp &nbsp&nbsp&nbsp
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "time", array()), "H:i:s"), "html", null, true);
            echo "&nbsp &nbsp &nbsp &nbsp</p></td>
            </i>
        </tr>

        <tr>
            <td> <p style =\"color: black; font-family: Times New Roman; font-size: 15px; color: black \">&nbsp &nbsp";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "text", array()), "html", null, true);
            echo " </p></td>
        </tr>

        <tr>
            ";
            // line 47
            if ($this->getAttribute($context["entity"], "image", array())) {
                // line 48
                echo "                <td><center><img src= \"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["entity"], "image", array())), null, true), "html", null, true);
                echo "\" width=500px; height= 500px;></center></td>
            ";
            }
            // line 50
            echo "</tr>

<tr>
    <td>
<br><center><i>

        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show_post", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
            <i> <p align=\"center\" style=\"width: 8%; font: bold 15px Arial;   text-decoration: none;   background-color: #EEEEEE;   color: #333333;   padding: 2px 6px 2px 6px;   border-top: 1px solid #CCCCCC;   border-right: 1px solid #333333;   border-bottom: 1px solid #333333; border-left: 1px solid #CCCCCC;\">
                    Show</p></i></a>                      
</center></i></td>
</tr>
<hr>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</tbody>

";
    }

    public function getTemplateName()
    {
        return "TimelineBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 64,  116 => 56,  108 => 50,  102 => 48,  100 => 47,  93 => 43,  85 => 38,  79 => 37,  70 => 31,  65 => 28,  61 => 27,  50 => 19,  39 => 10,  36 => 5,  11 => 3,);
    }
}
