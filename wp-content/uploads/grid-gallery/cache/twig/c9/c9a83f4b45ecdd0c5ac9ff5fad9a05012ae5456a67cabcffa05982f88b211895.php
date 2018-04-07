<?php

/* @featuredplugins/index.twig */
class __TwigTemplate_8147d147b246b4e00bead6838dc134349d2211f2b40dc493e0f126f54f360938 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@featuredplugins/index.twig", 1);
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Featured Plugins")), "html", null, true);
        echo "</a>
    </nav>

";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "\t<section id=\"supsystic-featured-plugins\">
\t\t<div class=\"supsysticPageBundleContainer container-fluid\">
\t\t\t<div class=\"bundle-text col-md-7 col-xs-12\">";
        // line 16
        if (isset($context["PPS_LANG_CODE"])) { $_PPS_LANG_CODE_ = $context["PPS_LANG_CODE"]; } else { $_PPS_LANG_CODE_ = null; }
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get plugins bundle today and save over 80%", $_PPS_LANG_CODE_)), "html", null, true);
        echo "</div>
\t\t\t<div class=\"bundle-btn col-md-5 col-xs-12\">
\t\t\t\t<a href=\"";
        // line 18
        if (isset($context["bundleUrl"])) { $_bundleUrl_ = $context["bundleUrl"]; } else { $_bundleUrl_ = null; }
        echo twig_escape_filter($this->env, $_bundleUrl_, "html", null, true);
        echo "\" class=\"btn btn-full btn-revert hvr-shutter-out-horizontal\" target=\"_blank\">
\t\t\t\t\t";
        // line 19
        if (isset($context["PPS_LANG_CODE"])) { $_PPS_LANG_CODE_ = $context["PPS_LANG_CODE"]; } else { $_PPS_LANG_CODE_ = null; }
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Check It out", $_PPS_LANG_CODE_)), "html", null, true);
        echo "
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<hr />
\t\t";
        // line 24
        if (isset($context["pluginsList"])) { $_pluginsList_ = $context["pluginsList"]; } else { $_pluginsList_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_pluginsList_);
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 25
            echo "\t\t\t<div class=\"catitem col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t<div class=\"download-product-item\">
\t\t\t\t\t<div class=\"dp-thumb text-center\">
\t\t\t\t\t\t<a href=\"";
            // line 28
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_p_, "url", array()), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"";
            // line 29
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_p_, "img", array()), "html", null, true);
            echo "\" class=\"img-responsive wp-post-image\" alt=\"";
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_p_, "label", array()), "html", null, true);
            echo "\" />\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"dp-title\">
\t\t\t\t\t\t<a href=\"";
            // line 33
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_p_, "url", array()), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t";
            // line 34
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_p_, "label", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"dp-excerpt\">
\t\t\t\t\t\t<div class=\"dp-excerpt-wrapper\">
\t\t\t\t\t\t\t";
            // line 39
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_p_, "desc", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"dp-buttons\">
\t\t\t\t\t\t<a href=\"";
            // line 43
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_p_, "url", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-full hvr-shutter-out-horizontal\">
\t\t\t\t\t\t\t";
            // line 44
            if (isset($context["PPS_LANG_CODE"])) { $_PPS_LANG_CODE_ = $context["PPS_LANG_CODE"]; } else { $_PPS_LANG_CODE_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("More info", $_PPS_LANG_CODE_)), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 46
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_p_, "download", array()), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-full btn-info hvr-shutter-out-horizontal\">
\t\t\t\t\t\t\t";
            // line 47
            if (isset($context["PPS_LANG_CODE"])) { $_PPS_LANG_CODE_ = $context["PPS_LANG_CODE"]; } else { $_PPS_LANG_CODE_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Download", $_PPS_LANG_CODE_)), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t</section>
";
    }

    public function getTemplateName()
    {
        return "@featuredplugins/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 53,  146 => 47,  141 => 46,  135 => 44,  130 => 43,  122 => 39,  113 => 34,  108 => 33,  97 => 29,  92 => 28,  87 => 25,  82 => 24,  73 => 19,  68 => 18,  62 => 16,  58 => 14,  55 => 13,  44 => 8,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@featuredplugins/index.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Featuredplugins/views/index.twig");
    }
}
