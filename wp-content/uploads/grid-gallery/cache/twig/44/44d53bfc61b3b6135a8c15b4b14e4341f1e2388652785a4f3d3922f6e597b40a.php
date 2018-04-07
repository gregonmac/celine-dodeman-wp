<?php

/* @promo/promo.twig */
class __TwigTemplate_6472d6f57ebd391a3f0b61d26bf7d5dab74bc19a4d23cf8a3c83acb416025a97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "@promo/promo.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section>
        <div class=\"supsystic-item supsystic-panel supsystic-plugin supsystic-plugin-promo\">
            <div id=\"containerWrapper\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <h2>
                            ";
        // line 10
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Welcome to the"), "method"), "html", null, true);
        echo " ";
        if (isset($context["plugin_name"])) { $_plugin_name_ = $context["plugin_name"]; } else { $_plugin_name_ = null; }
        echo twig_escape_filter($this->env, $_plugin_name_, "html", null, true);
        echo " v ";
        if (isset($context["plugin_version"])) { $_plugin_version_ = $context["plugin_version"]; } else { $_plugin_version_ = null; }
        echo twig_escape_filter($this->env, $_plugin_version_, "html", null, true);
        echo "
                        </h2>
                        <p class=\"col-sm-6\">
                            ";
        // line 13
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Photo Gallery plugin is created for people who would like to show their photos in a marvelous way. Perform your best ideas, making delightful presentations or galleries from videos and photos."), "method"), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-8\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <h3>";
        // line 21
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Step-by-step tutorial"), "method"), "html", null, true);
        echo "</h3>
                                <p>
                                    ";
        // line 23
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "There’re really many options of photo gallery plugin customization. So as soon as you close that page, I’ll show you step-by-step tutorial of how to use plugin. Hope it will be usefull for you :)"), "method"), "html", null, true);
        echo "
                                </p>
                            </div>
                            <div class=\"col-sm-6\">
                                <h3>";
        // line 27
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Support"), "method"), "html", null, true);
        echo "</h3>
                                <p>
                                    ";
        // line 29
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo $this->getAttribute($_environment_, "translate", array(0 => "We love our plugin and do the best to improve all features you want and fix all issues. But sometimes some issues happened or you can’t find feature you want :) Don’t worry, just <a href=\"//supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=welcomepage&utm_campaign=photo-gallery#contact\" target=\"_blank\"> contact us </a> . We’ll answer in an hour and fix all issues."), "method");
        echo "
                                </p>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <h3>";
        // line 35
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Video Tutorial"), "method"), "html", null, true);
        echo "</h3>
                                <iframe type=\"text/html\"
                                        width=\"90%\"
                                        height=\"330px\"
                                        src=\"https://www.youtube.com/embed/5bkjrlV14CE\"
                                        frameborder=\"0\">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <h3>
                            ";
        // line 47
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Frequently Asked Questions"), "method"), "html", null, true);
        echo "
                        </h3>

                        <h4>
                            ";
        // line 51
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Gallery doesn’t load on the front end. If the loading gallery icon just keeps playing but never loads the gallery."), "method"), "html", null, true);
        echo "
                        </h4>
                        <p>
\t\t\t\t\t\t\tMost likely there are conflicts with your theme or other plugins. Please contact us through our <a href=\"//supsystic.com/contact-us/\" target=\"_blank\">internal support</a>. We will check what is wrong and will help you to solve the problem.
                        </p>

                        <h4>
                            ";
        // line 58
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "How to change the position of photos in gallery?"), "method"), "html", null, true);
        echo "
                        </h4>
                        <p>
\t\t\t\t\t\t\tTo change the position of photos just drag them manually on the Images List and click save. Also there you can sort the images by add date, create date, size, name and tags.
                        </p>
\t\t\t\t\t\t
                        <h4>
                            ";
        // line 65
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "How to insert gallery into widget?"), "method"), "html", null, true);
        echo "
                        </h4>
                         <p>
\t\t\t\t\t\t\tIf you want to use gallery in widgets - 
                            <ol>
                                <li>";
        // line 70
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Go to Appearance -> Widgets."), "method"), "html", null, true);
        echo "</li>
                                <li>";
        // line 71
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "You’ll see Gallery by Supsystic Widget on the left. Drag it to the area, where you want it to appear."), "method"), "html", null, true);
        echo "</li>
                                <li>";
        // line 72
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Then choose what gallery you want to display. And press save."), "method"), "html", null, true);
        echo "</li>
                            </ol>
                        </p>

                        <h4>
                            <a href=\"//supsystic.com/plugins/photo-gallery/?utm_source=plugin&utm_medium=welcomepagefaq&utm_campaign=photogallery#faq\" target=\"_blank\">";
        // line 77
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Check all other FAQs"), "method"), "html", null, true);
        echo "</a>
                        </h4>

                        <div style=\"clear: both;\"></div>
                        <a href=\"";
        // line 81
        if (isset($context["start_url"])) { $_start_url_ = $context["start_url"]; } else { $_start_url_ = null; }
        echo twig_escape_filter($this->env, $_start_url_, "html", null, true);
        echo "\" style=\"font-size: 20px\" class=\"button button-primary button-hero\">
                            ";
        // line 82
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Let's Start!"), "method"), "html", null, true);
        echo "
                        </a>
                    </div>
                </div>
                <div style=\"clear: both;\"></div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "@promo/promo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 82,  176 => 81,  168 => 77,  159 => 72,  154 => 71,  149 => 70,  140 => 65,  129 => 58,  118 => 51,  110 => 47,  94 => 35,  84 => 29,  78 => 27,  70 => 23,  64 => 21,  52 => 13,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@promo/promo.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Promo/views/promo.twig");
    }
}
