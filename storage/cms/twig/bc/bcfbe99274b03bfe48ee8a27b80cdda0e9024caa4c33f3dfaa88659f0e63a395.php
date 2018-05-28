<?php

/* C:\xampp\htdocs\ajatelg/themes/ajatelg/pages/index.htm */
class __TwigTemplate_6d6b07abc19fee36c885320d14299673925c93eea361b02a40a583ad0c55906f extends Twig_Template
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
        echo "<div id=\"header\">
    <div id=\"header-logo\">
    </div>
    <div id=\"header-title\">
        IKT-OSAKONNA AJATELG
    </div>
    <div id=\"logout\">
\t<a data-request=\"onLogout\" data-request-data=\"redirect: '/login'\"><span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\" title=\"Logi välja\"></span></a>
\t</div>
</div>
<div id=\"timeline\">
\t\t<ul id=\"dates\">
\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 14
            echo "\t\t    <li class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "color", array()), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "end_event", array())) {
                echo "end_event";
            }
            echo "\"><a href=\"#";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "date", array()), "F jS, Y"), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('etdate')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "date", array()), "%BP %Y"));
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t</ul>
\t\t<ul id=\"issues\">
\t\t\t<!-- <li id=\"1900\">
\t\t\t\t<img src=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/1.png");
        echo "\" width=\"256\" height=\"256\" />
\t\t\t\t<h1>1900</h1> 
\t\t\t\t<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
\t\t\t</li> -->
\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 24
            echo "    \t\t\t<li class=\"syndmus\" id=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "date", array()), "F jS, Y"), "html", null, true);
            echo "\">
    \t\t\t    <h1>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "title", array()), "html", null, true);
            echo "</h1>
    \t\t\t    <p>";
            // line 26
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "text", array());
            echo "</p>
    \t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t</ul>
\t\t<a href=\"#\" id=\"next\">+</a>
\t\t<a href=\"#\" id=\"prev\">-</a>
\t</div>
\t";
        // line 33
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 34
        echo "\t<script>
\t
\t</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ajatelg/themes/ajatelg/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 34,  94 => 33,  88 => 29,  79 => 26,  75 => 25,  70 => 24,  66 => 23,  59 => 19,  54 => 16,  37 => 14,  33 => 13,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div id=\"header-logo\">
    </div>
    <div id=\"header-title\">
        IKT-OSAKONNA AJATELG
    </div>
    <div id=\"logout\">
\t<a data-request=\"onLogout\" data-request-data=\"redirect: '/login'\"><span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\" title=\"Logi välja\"></span></a>
\t</div>
</div>
<div id=\"timeline\">
\t\t<ul id=\"dates\">
\t\t{% for entry in entries %}
\t\t    <li class=\"{{ entry.color }} {% if entry.end_event %}end_event{% endif %}\"><a href=\"#{{ entry.date|date('F jS, Y') }}\">{{ entry.date|etdate(\"%BP %Y\") }}</a></li>
\t\t{% endfor %}
\t\t</ul>
\t\t<ul id=\"issues\">
\t\t\t<!-- <li id=\"1900\">
\t\t\t\t<img src=\"{{ \"assets/images/1.png\"|theme }}\" width=\"256\" height=\"256\" />
\t\t\t\t<h1>1900</h1> 
\t\t\t\t<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
\t\t\t</li> -->
\t\t\t{% for entry in entries %}
    \t\t\t<li class=\"syndmus\" id=\"{{ entry.date|date('F jS, Y') }}\">
    \t\t\t    <h1>{{ entry.title }}</h1>
    \t\t\t    <p>{{ entry.text|raw }}</p>
    \t\t\t</li>
\t\t\t{% endfor %}
\t\t</ul>
\t\t<a href=\"#\" id=\"next\">+</a>
\t\t<a href=\"#\" id=\"prev\">-</a>
\t</div>
\t{% framework %}
\t<script>
\t
\t</script>", "C:\\xampp\\htdocs\\ajatelg/themes/ajatelg/pages/index.htm", "");
    }
}
