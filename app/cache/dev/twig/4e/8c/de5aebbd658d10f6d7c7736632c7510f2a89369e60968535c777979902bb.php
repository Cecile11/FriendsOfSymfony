<?php

/* FOSUserBundle::prolayout.html.twig */
class __TwigTemplate_4e8cde5aebbd658d10f6d7c7736632c7510f2a89369e60968535c777979902bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("TimelineBundle:Default:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "   
    <div class=\"container\" style = \"width: 940px; height: 600px;\">
        
        <div class=\"row\"  style =\"height: 100px;\">
            <div class=\"col-sm-4 col-md-4 user-details\">
               
                <div class=\"user-image\" style=\"width: 940px\" align=\"right\">
                    ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "gender", array()) == "female")) {
            // line 12
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/timeline/images/female.jpg"), "html", null, true);
            echo "\" alt=\"Male\" title=\"Male\" class=\"img-circle\">
                    ";
        } else {
            // line 14
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/timeline/images/male.jpg"), "html", null, true);
            echo "\" alt=\"Male\" title=\"Male\" class=\"img-circle\">
                    ";
        }
        // line 16
        echo "
                </div>
                <div class=\"user-info-block\" style=\"width: 940px\" align=\"center\">
                    <div class=\"user-heading\" style =\"background-color: #002a80; width: 940px\" align=\"center\">
                        <h3 style=\" color: #fff; font-family: Monotype Corsiva; font-size: 35px; font-weight: bold; height: 60px; height: 53px; border: 2px solid; border-radius: 2px;\"><i>
                            ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstName", array()) == "")) {
            // line 22
            echo "                                Anonymous
                            ";
        } else {
            // line 24
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstName", array()), "html", null, true);
            echo "
                            ";
        }
        // line 26
        echo "                            </i></h3>
                        ";
        // line 28
        echo "                    </div>
                    <ul class=\"navigation\">
                        <li ";
        // line 30
        echo ">
                            <a data-toggle=\"tab\" href=\"/profile\" align=\"center\">
                                <span class=\"glyphicon glyphicon-user\"></span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle=\"tab\" href=\"/profile/edit\"  align=\"center\">
                                <span class=\"glyphicon glyphicon-edit\"></span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle=\"tab\" href=\"/resetting/request\"  align=\"center\">
                                <span class=\"glyphicon glyphicon-retweet\"></span>
                            </a>
                        </li>
                        ";
        // line 50
        echo "                    </ul>
                    <div class=\"user-body\" style =\"background-color: #FAFAD2; width: 940px; border: 2px solid; border-color: #002a80;\">
                        <div class=\"tab-content\">
                            <div id=\"information\" class=\"tab-pane active\" align=\"center\">
                                ";
        // line 54
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 56
        echo "                            </div>

                        </div>
                    </div>
                </div>
                            
                            
    
            </div>
        </div>
    </div> 
                            
                            ";
    }

    // line 54
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 55
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::prolayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 55,  130 => 54,  114 => 56,  112 => 54,  106 => 50,  89 => 30,  85 => 28,  82 => 26,  76 => 24,  72 => 22,  70 => 21,  63 => 16,  57 => 14,  51 => 12,  49 => 11,  40 => 4,  37 => 3,  11 => 1,);
    }
}
