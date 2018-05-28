<?php

/* C:\xampp\htdocs\ajatelg/themes/ajatelg/layouts/login.htm */
class __TwigTemplate_410a05ab3a475b81f98d38d08eadcb488904380ed3d94bd4382b8391e2a0c38a extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"et\" class=\"no-js\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0\">
        <meta name=\"robots\" content=\"noindex\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <title>IKT-osakonna ajatelg</title>
        <link href=\"https://ajatelg.ikt.khk.ee/modules/system/assets/ui/storm.css\" rel=\"stylesheet\">
        <link href=\"https://ajatelg.ikt.khk.ee/modules/backend/assets/css/october.css\" rel=\"stylesheet\">
        <script src=\"https://ajatelg.ikt.khk.ee/modules/backend/assets/js/vendor/jquery.min.js\"></script>
        <script src=\"https://ajatelg.ikt.khk.ee/modules/system/assets/js/framework.js\"></script>
        <script src=\"https://ajatelg.ikt.khk.ee/modules/system/assets/ui/storm-min.js\"></script>
        <script src=\"https://ajatelg.ikt.khk.ee/modules/backend/assets/js/october-min.js\"></script>
        <script src=\"https://ajatelg.ikt.khk.ee/modules/backend/assets/js/auth/auth.js\"></script>
                            <style>
        .br-p{color:#0054a6}.br-s{color:#e67e22}.br-a{color:#3498db}.br-p-s10{color:#0054a6}.br-s-s10{color:#f27d16}.br-a-s10{color:#289ae7}.br-p-s20{color:#0054a6}.br-s-s20{color:#ff7c09}.br-a-s20{color:#1c9df3}.bg-p{background-color:#0054a6}.bg-s{background-color:#e67e22}.bg-a{background-color:#3498db}.bg-p-s10{background-color:#0054a6}.bg-s-s10{background-color:#f27d16}.bg-a-s10{background-color:#289ae7}.bg-p-s20{background-color:#0054a6}.bg-s-s20{background-color:#ff7c09}.bg-a-s20{background-color:#1c9df3}.sidenav-tree ul.top-level>li>div.group:before{border-top-color:#0054a6}.sidenav-tree ul.top-level>li>ul li.active{border-color:#e67e22}body.outer{background:#00478d}.oc-logo-transparent{background-image:url('https://ajatelg.ikt.khk.ee/storage/app/uploads/public/5af/13f/c78/5af13fc780c35764169960.png') !important}.oc-logo{background-image:url('https://ajatelg.ikt.khk.ee/storage/app/uploads/public/5af/13f/c78/5af13fc780c35764169960.png')}table.table.data tbody tr.active td:first-child{border-left:3px solid #e67e22}.fancy-layout .form-tabless-fields{background:#e67e22}.fancy-layout .form-tabless-fields .loading-indicator-container .loading-indicator{background:#e67e22}.fancy-layout .control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li.active a>span.title,.fancy-layout.control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li.active a>span.title,.fancy-layout .control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li.active a>span.title:before,.fancy-layout.control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li.active a>span.title:before,.fancy-layout .control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li.active a>span.title:after,.fancy-layout.control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li.active a>span.title:after{background:#e67e22}.fancy-layout .control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li a>span.title,.fancy-layout.control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li a>span.title,.fancy-layout .control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li a>span.title:before,.fancy-layout.control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li a>span.title:before,.fancy-layout .control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li a>span.title:after,.fancy-layout.control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li a>span.title:after{background-color:#b05606}.fancy-layout .control-tabs.master-tabs>div>div.tabs-container,.fancy-layout.control-tabs.master-tabs>div>div.tabs-container{background-color:#bf5d07}.fancy-layout .control-tabs.primary-tabs.master-area>div>ul.nav-tabs,.fancy-layout.control-tabs.primary-tabs.master-area>div>ul.nav-tabs{background:#e67e22}.fancy-layout .control-tabs.secondary-tabs.secondary-content-tabs.primary-collapsed>div>ul.nav-tabs,.fancy-layout.control-tabs.secondary-tabs.secondary-content-tabs.primary-collapsed>div>ul.nav-tabs{background:#e67e22}.control-filelist ul li.active>a:after{background:#e67e22}div.control-componentlist.droppable{background-color:#f0b37e}.stripe-loading-indicator .stripe,.stripe-loading-indicator .stripe-loaded{background:#3498db}    </style>
    <style>
        .fr-view .oc-text-gray{color:#AAA !important}.fr-view .oc-text-bordered{border-top:solid 1px #222;border-bottom:solid 1px #222;padding:10px 0}.fr-view .oc-text-spaced{letter-spacing:1px}.fr-view .oc-text-uppercase{text-transform:uppercase}.fr-view a.oc-link-strong{font-weight:700}.fr-view a.oc-link-green{color:green}.fr-view table.oc-dashed-borders td,.fr-view table.oc-dashed-borders th{border-style:dashed}.fr-view table.oc-alternate-rows tbody tr:nth-child(2n){background:#f5f5f5}.fr-view table td.oc-cell-highlighted,.fr-view table th.oc-cell-highlighted{border:1px double #f00}.fr-view table td.oc-cell-thick-border,.fr-view table th.oc-cell-thick-border{border-width:2px}.fr-view img.oc-img-rounded{border-radius:100%;background-clip:padding-box}.fr-view img.oc-img-bordered{border:solid 10px #ccc;box-sizing:content-box}    </style>
    </head>
    <body class=\"outer signin preload\">
        <div id=\"layout-canvas\">
            <div class=\"layout\">

                <div class=\"layout-row min-size layout-head\">
                    <div class=\"layout-cell\">
                        <h1 class=\"oc-logo\">IKT osakonna ajatelg</h1>
                    </div>
                </div>
                <div class=\"layout-row\">
                    <div class=\"layout-cell\">
                        <div class=\"outer-form-container\">
                            <h2>IKT osakonna ajatelg</h2>

<form data-request=\"onSignin\">

    <div class=\"form-elements\" role=\"form\">
        <div class=\"form-group text-field horizontal-form october\">
        \t";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 41
        echo "        </div>
    </div>
</form>                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Flash Messages -->
        <div id=\"layout-flash-messages\">
\t        ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 52
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 53
                echo "\t    \t\t<p data-control=\"flash-message\" class=\"flash-message fade ";
                echo twig_escape_filter($this->env, (((($context["type"] ?? null) == "error")) ? ("danger") : (($context["type"] ?? null))), "html", null, true);
                echo "\" data-interval=\"5\">";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "</p>
\t\t\t";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 55
        echo "\t\t</div>

\t\t";
        // line 57
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 58
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ajatelg/themes/ajatelg/layouts/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 58,  91 => 57,  87 => 55,  78 => 53,  75 => 52,  62 => 41,  60 => 40,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"et\" class=\"no-js\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0\">
        <meta name=\"robots\" content=\"noindex\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <title>IKT-osakonna ajatelg</title>
        <link href=\"https://ajatelg.ikt.khk.ee/modules/system/assets/ui/storm.css\" rel=\"stylesheet\">
        <link href=\"https://ajatelg.ikt.khk.ee/modules/backend/assets/css/october.css\" rel=\"stylesheet\">
        <script src=\"https://ajatelg.ikt.khk.ee/modules/backend/assets/js/vendor/jquery.min.js\"></script>
        <script src=\"https://ajatelg.ikt.khk.ee/modules/system/assets/js/framework.js\"></script>
        <script src=\"https://ajatelg.ikt.khk.ee/modules/system/assets/ui/storm-min.js\"></script>
        <script src=\"https://ajatelg.ikt.khk.ee/modules/backend/assets/js/october-min.js\"></script>
        <script src=\"https://ajatelg.ikt.khk.ee/modules/backend/assets/js/auth/auth.js\"></script>
                            <style>
        .br-p{color:#0054a6}.br-s{color:#e67e22}.br-a{color:#3498db}.br-p-s10{color:#0054a6}.br-s-s10{color:#f27d16}.br-a-s10{color:#289ae7}.br-p-s20{color:#0054a6}.br-s-s20{color:#ff7c09}.br-a-s20{color:#1c9df3}.bg-p{background-color:#0054a6}.bg-s{background-color:#e67e22}.bg-a{background-color:#3498db}.bg-p-s10{background-color:#0054a6}.bg-s-s10{background-color:#f27d16}.bg-a-s10{background-color:#289ae7}.bg-p-s20{background-color:#0054a6}.bg-s-s20{background-color:#ff7c09}.bg-a-s20{background-color:#1c9df3}.sidenav-tree ul.top-level>li>div.group:before{border-top-color:#0054a6}.sidenav-tree ul.top-level>li>ul li.active{border-color:#e67e22}body.outer{background:#00478d}.oc-logo-transparent{background-image:url('https://ajatelg.ikt.khk.ee/storage/app/uploads/public/5af/13f/c78/5af13fc780c35764169960.png') !important}.oc-logo{background-image:url('https://ajatelg.ikt.khk.ee/storage/app/uploads/public/5af/13f/c78/5af13fc780c35764169960.png')}table.table.data tbody tr.active td:first-child{border-left:3px solid #e67e22}.fancy-layout .form-tabless-fields{background:#e67e22}.fancy-layout .form-tabless-fields .loading-indicator-container .loading-indicator{background:#e67e22}.fancy-layout .control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li.active a>span.title,.fancy-layout.control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li.active a>span.title,.fancy-layout .control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li.active a>span.title:before,.fancy-layout.control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li.active a>span.title:before,.fancy-layout .control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li.active a>span.title:after,.fancy-layout.control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li.active a>span.title:after{background:#e67e22}.fancy-layout .control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li a>span.title,.fancy-layout.control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li a>span.title,.fancy-layout .control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li a>span.title:before,.fancy-layout.control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li a>span.title:before,.fancy-layout .control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li a>span.title:after,.fancy-layout.control-tabs.master-tabs>div>div.tabs-container>ul.nav-tabs>li a>span.title:after{background-color:#b05606}.fancy-layout .control-tabs.master-tabs>div>div.tabs-container,.fancy-layout.control-tabs.master-tabs>div>div.tabs-container{background-color:#bf5d07}.fancy-layout .control-tabs.primary-tabs.master-area>div>ul.nav-tabs,.fancy-layout.control-tabs.primary-tabs.master-area>div>ul.nav-tabs{background:#e67e22}.fancy-layout .control-tabs.secondary-tabs.secondary-content-tabs.primary-collapsed>div>ul.nav-tabs,.fancy-layout.control-tabs.secondary-tabs.secondary-content-tabs.primary-collapsed>div>ul.nav-tabs{background:#e67e22}.control-filelist ul li.active>a:after{background:#e67e22}div.control-componentlist.droppable{background-color:#f0b37e}.stripe-loading-indicator .stripe,.stripe-loading-indicator .stripe-loaded{background:#3498db}    </style>
    <style>
        .fr-view .oc-text-gray{color:#AAA !important}.fr-view .oc-text-bordered{border-top:solid 1px #222;border-bottom:solid 1px #222;padding:10px 0}.fr-view .oc-text-spaced{letter-spacing:1px}.fr-view .oc-text-uppercase{text-transform:uppercase}.fr-view a.oc-link-strong{font-weight:700}.fr-view a.oc-link-green{color:green}.fr-view table.oc-dashed-borders td,.fr-view table.oc-dashed-borders th{border-style:dashed}.fr-view table.oc-alternate-rows tbody tr:nth-child(2n){background:#f5f5f5}.fr-view table td.oc-cell-highlighted,.fr-view table th.oc-cell-highlighted{border:1px double #f00}.fr-view table td.oc-cell-thick-border,.fr-view table th.oc-cell-thick-border{border-width:2px}.fr-view img.oc-img-rounded{border-radius:100%;background-clip:padding-box}.fr-view img.oc-img-bordered{border:solid 10px #ccc;box-sizing:content-box}    </style>
    </head>
    <body class=\"outer signin preload\">
        <div id=\"layout-canvas\">
            <div class=\"layout\">

                <div class=\"layout-row min-size layout-head\">
                    <div class=\"layout-cell\">
                        <h1 class=\"oc-logo\">IKT osakonna ajatelg</h1>
                    </div>
                </div>
                <div class=\"layout-row\">
                    <div class=\"layout-cell\">
                        <div class=\"outer-form-container\">
                            <h2>IKT osakonna ajatelg</h2>

<form data-request=\"onSignin\">

    <div class=\"form-elements\" role=\"form\">
        <div class=\"form-group text-field horizontal-form october\">
        \t{% page %}
        </div>
    </div>
</form>                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Flash Messages -->
        <div id=\"layout-flash-messages\">
\t        {% flash %}
\t    \t\t<p data-control=\"flash-message\" class=\"flash-message fade {{ type == 'error' ? 'danger' : type }}\" data-interval=\"5\">{{ message }}</p>
\t\t\t{% endflash %}
\t\t</div>

\t\t{% scripts %}
    </body>
</html>", "C:\\xampp\\htdocs\\ajatelg/themes/ajatelg/layouts/login.htm", "");
    }
}
