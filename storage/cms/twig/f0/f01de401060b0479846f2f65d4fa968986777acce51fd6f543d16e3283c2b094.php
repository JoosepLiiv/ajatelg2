<?php

/* C:\xampp\htdocs\ajatelg/plugins/rainlab/user/components/account/register.htm */
class __TwigTemplate_6e0a7c0d8381a63dd77ad5f3bba06e5d48c0653cb4325e8e95c598ff2c649a5d extends Twig_Template
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
        if (($context["canRegister"] ?? null)) {
            // line 2
            echo "    <h3>Register</h3>
    <form
        data-request=\"onRegister\">
        <div class=\"form-group\">
            <label for=\"registerName\">Full Name</label>
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Enter your full name\" />
        </div>

        <div class=\"form-group\">
            <label for=\"registerEmail\">Email</label>
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Enter your email\" />
        </div>

        ";
            // line 25
            if ((($context["loginAttribute"] ?? null) == "username")) {
                // line 26
                echo "            <div class=\"form-group\">
                <label for=\"registerUsername\">Username</label>
                <input
                    name=\"username\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerUsername\"
                    placeholder=\"Enter your username\" />
            </div>
        ";
            }
            // line 36
            echo "
        <div class=\"form-group\">
            <label for=\"registerPassword\">Password</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Choose a password\" />
        </div>

        <button type=\"submit\" class=\"btn btn-default\">Register</button>
    </form>
";
        } else {
            // line 50
            echo "    <!-- Registration is disabled. -->
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ajatelg/plugins/rainlab/user/components/account/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 50,  60 => 36,  48 => 26,  46 => 25,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if canRegister %}
    <h3>Register</h3>
    <form
        data-request=\"onRegister\">
        <div class=\"form-group\">
            <label for=\"registerName\">Full Name</label>
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Enter your full name\" />
        </div>

        <div class=\"form-group\">
            <label for=\"registerEmail\">Email</label>
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Enter your email\" />
        </div>

        {% if loginAttribute == \"username\" %}
            <div class=\"form-group\">
                <label for=\"registerUsername\">Username</label>
                <input
                    name=\"username\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerUsername\"
                    placeholder=\"Enter your username\" />
            </div>
        {% endif %}

        <div class=\"form-group\">
            <label for=\"registerPassword\">Password</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Choose a password\" />
        </div>

        <button type=\"submit\" class=\"btn btn-default\">Register</button>
    </form>
{% else %}
    <!-- Registration is disabled. -->
{% endif %}
", "C:\\xampp\\htdocs\\ajatelg/plugins/rainlab/user/components/account/register.htm", "");
    }
}
