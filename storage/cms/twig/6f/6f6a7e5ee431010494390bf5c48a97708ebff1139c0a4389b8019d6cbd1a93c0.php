<?php

/* C:\xampp\htdocs\ajatelg/themes/ajatelg/pages/login.htm */
class __TwigTemplate_228ecc42ead5ef956e6d470ea8d4ea39b8044d69def571c4d827dfb457eea3e4 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ajatelg/themes/ajatelg/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'account' %}", "C:\\xampp\\htdocs\\ajatelg/themes/ajatelg/pages/login.htm", "");
    }
}
