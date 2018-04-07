<?php

/* @overview/index.twig */
class __TwigTemplate_f9ebf7e831b1e0c964eb6d3b8b9294bcb94fc8c7f6f4a8be1a1879840606ca20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@overview/index.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "
    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 6
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 8
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overview")), "html", null, true);
        echo "</a>
    </nav>

";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"supsystic-overview\">
        <div class=\"half-page-left\">
            ";
        // line 20
        echo "
            <div class=\"clear\"></div>

            <h3>FAQ and Documentation</h3>
            <div class=\"faq-list\">
                <div class=\"faq-title\">
                    <i class=\"fa fa-info-circle\"></i>
                    Gallery plugin installation
                    <div class=\"description\" hidden>
                        One more advantage of responsive grid gallery WordPress plugin is an easy installation. To install it, you should make three following steps:</br>
                        1. Download Supsystic Gallery WordPress plugin.</br>
                        2. Upload to your WordPress plugins directory.</br>
                        3. Activate and enjoy.
                    </div>
                </div>
                <div class=\"faq-title\">
                    <i class=\"fa fa-info-circle\"></i>
                    Gallery doesn’t load on the front end. If the loading gallery icon just keeps playing but never loads the gallery.
                    <div class=\"description\" hidden>
                        Most likely there are conflicts with your theme or other plugins. Please contact us through our <a href=\"//supsystic.com/contact-us/\" target=\"_blank\">internal support</a>. We will check what is wrong and will help you to solve the problem.
                    </div>
                </div>
                <div class=\"faq-title\">
                    <i class=\"fa fa-info-circle\"></i>
                    How to change the position of photos in gallery?

                    <div class=\"description\" hidden>
                        To change the position of photos just drag them manually on the Images List and click save.  Also there you can sort the images by add date, create date, size, name and tags.
                    </div>
                </div>
\t\t\t\t<div class=\"faq-title\">
                    <i class=\"fa fa-info-circle\"></i>
                    What is Gallery Loader?

                    <div class=\"description\" hidden>
                        This is a new option of Photo Gallery by Supsystic, which can be found on the Main tab settings. With its help you can choose funny loader icons to entertain your users while they are waiting. Also you can set the color for your icon or disable this option at all, if you don’t need it.
\t\t\t\t\t\tLearn more about it in <a href=\"//supsystic.com/main-settings/\" target=\"_blank\">Main Settings.</a>
                    </div>
                </div>
                <div style=\"clear: both;\"></div>
                <a href=\"";
        // line 60
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "promo", 1 => "showTutorial"), "method"), "html", null, true);
        echo "\" class=\"button button-primary button-hero\">
                    <i class=\"fa fa-info-circle\"></i>
                    ";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Start step-by-step tutorial")), "html", null, true);
        echo "
                </a>
                <a href=\"http://supsystic.com/plugins/photo-gallery/?utm_source=plugin&utm_medium=faq&utm_campaign=gallery#faq\" class=\"button button-primary button-hero\">
                    <i class=\"fa fa-info-circle\"></i>
                    Check all FAQs
                </a>
                <div style=\"clear: both;\"></div>
            </div>

            <div class=\"video\">
                <h3>Video tutorial</h3>
                <iframe type=\"text/html\"
                        width=\"80%\"
                        height=\"240px\"
                        src=\"http://www.youtube.com/embed/5bkjrlV14CE\"
                        frameborder=\"0\">
                </iframe>
            </div>

            <div class=\"server-settings\">
                <h3>Server Settings</h3>
                <ul class=\"settings-list\">
                    ";
        // line 84
        if (isset($context["serverSettings"])) { $_serverSettings_ = $context["serverSettings"]; } else { $_serverSettings_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_serverSettings_);
        foreach ($context['_seq'] as $context["title"] => $context["element"]) {
            // line 85
            echo "                        <li class=\"settings-line\" style=\"float: none;\">
                            <div class=\"settings-title\">";
            // line 86
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo twig_escape_filter($this->env, twig_trim_filter($_title_), "html", null, true);
            echo ":</div>
                            <span>";
            // line 87
            if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($_element_, "value", array())), "html", null, true);
            echo "</span>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['title'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                </ul>
            </div>
        </div>
        <div class=\"half-page-right\">
            <h3>News</h3>
            <div class=\"supsystic-overview-news\">
                ";
        // line 96
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        echo $_news_;
        echo "
            </div>
            <p style=\"padding-bottom: 20px; border-bottom: 1px solid rgba(164, 170, 172, 0.28);\">
                <a href=\"http://supsystic.com/plugins/photo-gallery/\" class=\"button button-primary button-hero\">
                    <i class=\"fa fa-info-circle\"></i>
                    All news
                </a>
            </p>

            <div class=\"overview-contact-form\">
                <h3>Contact form</h3>
                ";
        // line 108
        echo "                ";
        $context["form"] = $this->loadTemplate("@core/form.twig", "@overview/index.twig", 108);
        // line 109
        echo "
                ";
        // line 110
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["_wpnonce"])) { $__wpnonce_ = $context["_wpnonce"]; } else { $__wpnonce_ = null; }
        echo $_form_->getopen("post", $this->getAttribute($_environment_, "generateUrl", array(0 => "overview", 1 => "sendMail"), "method"), array("id" => "form-settings", "style" => "max-width: 428px;", "_wpnonce" => $__wpnonce_));
        echo "

                <table class=\"contact-form-table\" style=\"width: 100%;\">
                    <thead>

                    ";
        // line 115
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["contactForm"])) { $_contactForm_ = $context["contactForm"]; } else { $_contactForm_ = null; }
        echo $_form_->getrow((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Name")) . " *"), $_form_->gettext("name", $this->getAttribute($_contactForm_, "name", array()), array("required" => "")));
        // line 116
        echo "

                    ";
        // line 118
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["contactForm"])) { $_contactForm_ = $context["contactForm"]; } else { $_contactForm_ = null; }
        echo $_form_->getrow((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Email")) . " *"), $_form_->gettext("email", $this->getAttribute($_contactForm_, "email", array()), array("required" => "")));
        // line 119
        echo "

                    ";
        // line 121
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["contactForm"])) { $_contactForm_ = $context["contactForm"]; } else { $_contactForm_ = null; }
        echo $_form_->getrow((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Website")) . " *"), $_form_->gettext("website", $this->getAttribute($_contactForm_, "website", array()), array("required" => "")));
        // line 122
        echo "

                    ";
        // line 124
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getrow((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Subject")) . " *"), $_form_->gettext("subject", "", array("required" => "")));
        // line 125
        echo "

                    <tr>
                        <th scope=\"row\">
                            <label for=\"select-question\">";
        // line 129
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Topic")), "html", null, true);
        echo "</label>
                        </th>
                        <td>
                            <select id=\"select-question\" name=\"question\">
                                <option value=\"plugin_options\">
                                    ";
        // line 134
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Plugin options")), "html", null, true);
        echo "
                                </option>
                                <option value=\"bug\">
                                    ";
        // line 137
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report a bug")), "html", null, true);
        echo "
                                </option>
                                <option value=\"functionallity\">
                                    ";
        // line 140
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Require a new functionallity")), "html", null, true);
        echo "
                                </option>
                                <option value=\"other\">
                                    ";
        // line 143
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Other")), "html", null, true);
        echo "
                                </option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th scope=\"row\" style=\"vertical-align: top;\">
                            <label for=\"mail-text\">";
        // line 151
        echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Message")) . " *"), "html", null, true);
        echo "</label>
                        </th>
                        <td>
                            <textarea id=\"mail-text\" name=\"message\" cols=\"50\" rows=\"3\" placeholder=\"";
        // line 154
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hello Supsystic Team!")), "html", null, true);
        echo "\" required=\"\"></textarea>
                        </td>
                    </tr>

                    </thead>
                </table>

                <button id=\"send-mail\" type=\"submit\" class=\"button button-primary button-hero\">
                    <i class=\"fa fa-upload\"></i>
                    Send email
                </button>

                <div class=\"required-notification\" style=\"color: red; float: left;\" hidden>Fields with * are required to fill</div>
                ";
        // line 167
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getclose();
        echo "
            </div>
        </div>
        <div id=\"contact-form-dialog\" hidden>
            <div class=\"on-error\" style=\"display:none\">
                <p>";
        // line 172
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Some errors occurred while sending mail please send your message trough this contact form:")), "html", null, true);
        echo "</p>
                <p><a href=\"http://supsystic.com/plugins/photo-gallery/#contact\" target=\"_blank\">http://supsystic.com/plugins/photo-gallery/#contact</a></p>
            </div>
            <div class=\"message\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@overview/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 172,  290 => 167,  274 => 154,  268 => 151,  257 => 143,  251 => 140,  245 => 137,  239 => 134,  231 => 129,  225 => 125,  222 => 124,  218 => 122,  214 => 121,  210 => 119,  206 => 118,  202 => 116,  198 => 115,  187 => 110,  184 => 109,  181 => 108,  166 => 96,  158 => 90,  148 => 87,  143 => 86,  140 => 85,  135 => 84,  110 => 62,  104 => 60,  62 => 20,  58 => 14,  55 => 13,  44 => 8,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@overview/index.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Overview/views/index.twig");
    }
}
