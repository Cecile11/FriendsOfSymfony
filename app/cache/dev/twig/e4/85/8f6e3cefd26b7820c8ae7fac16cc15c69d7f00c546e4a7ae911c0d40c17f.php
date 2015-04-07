<?php

/* TimelineBundle:Post:myposts.html.twig */
class __TwigTemplate_e4858f6e3cefd26b7820c8ae7fac16cc15c69d7f00c546e4a7ae911c0d40c17f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("TimelineBundle:Post:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'user' => array($this, 'block_user'),
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

    // line 15
    public function block_user($context, array $blocks = array())
    {
        // line 16
        echo "    
    <div style = \"color: #fff; font-family: Monotype Corsiva; background-color:#002a80; font-size: 28px; font-weight: bold; height: 45px; border: 2px solid; border-radius: 2px;\">        

        <center>My Posts</center>
        <hr style = \"width:100%; height:2px; background: #002a80\"/>

    </div>
    <br>
    <center style = \"font-family: Monotype Corsiva; font-size: 25px;\"> Hello ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ", view and edit your posts here</center>
    ";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "<tbody>

        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "        <div style = \"background-color: #FAFAD2; box-shadow: 6px 6px 5px #888888;\">
            <br>
            <tr>
                <td> <p style =\"color: black; font-family: Times New Roman; font-size: 15px; \">&nbsp &nbsp";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "text", array()), "html", null, true);
            echo " </p></td>
            </tr>
            <tr>
            <i>
                <td> <p align=\"right\">
                    ";
            // line 40
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>&nbsp &nbsp&nbsp&nbsp
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "time", array()), "H:i:s"), "html", null, true);
            echo "&nbsp &nbsp &nbsp &nbsp</p></td>
            </i>
        </tr>
        <tr>
            ";
            // line 45
            if ($this->getAttribute($context["entity"], "image", array())) {
                // line 46
                echo "                <td><center><img src= \"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["entity"], "image", array())), null, true), "html", null, true);
                echo "\" width=500px; height= 500px;></center></td>
            ";
            }
            // line 48
            echo "</tr>

<tr>
    <td>
<br><center><i>
        <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
            <i> <p align=\"center\" style=\"width: 20%; font: bold 15px Arial;   text-decoration: none;   background-color: #EEEEEE;   color: #333333;   padding: 2px 6px 2px 6px;   border-top: 1px solid #CCCCCC;   border-right: 1px solid #333333;   border-bottom: 1px solid #333333; border-left: 1px solid #CCCCCC;\">
                    
            show</a> &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp  <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
            </p></i>
        </center></i></td>
</tr>
<hr>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "</tbody>
";
    }

    public function getTemplateName()
    {
        return "TimelineBundle:Post:myposts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 63,  114 => 56,  108 => 53,  101 => 48,  95 => 46,  93 => 45,  86 => 41,  80 => 40,  72 => 35,  67 => 32,  63 => 31,  59 => 29,  56 => 27,  50 => 24,  40 => 16,  37 => 15,  11 => 3,);
    }
}
