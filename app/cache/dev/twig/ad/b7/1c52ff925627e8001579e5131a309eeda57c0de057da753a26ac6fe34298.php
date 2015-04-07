<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_adb71c52ff925627e8001579e5131a309eeda57c0de057da753a26ac6fe34298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"fos_user_user_show\">
    
  
    
    
    <table>
        <tr>
            <td>
                <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.first_name", array(), "FOSUserBundle"), "html", null, true);
        echo ":</p>
            </td>
            <td>
                <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.last_name", array(), "FOSUserBundle"), "html", null, true);
        echo ":</p>
            </td>
            <td>
                <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "</p>
            </td>
             
        </tr>
        <tr>
            <td>
                <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.gender", array(), "FOSUserBundle"), "html", null, true);
        echo ":</p>
            </td>
            <td>
                <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender", array()), "html", null, true);
        echo "</p>
            </td>
             
        </tr>
        <tr>
            <td>
                <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</p>
            </td>
            <td>
                <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
            </td>
             
        </tr>
        <tr>
            <td>
                <p>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</p>
            </td>
            <td>
                <p>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
            </td>
             
        </tr>
    </table>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 47,  88 => 44,  79 => 38,  73 => 35,  64 => 29,  58 => 26,  49 => 20,  43 => 17,  35 => 12,  29 => 9,  19 => 1,);
    }
}
