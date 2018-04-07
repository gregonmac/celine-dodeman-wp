<?php

/* @galleries/preview.twig */
class __TwigTemplate_944f76eff470a51165139b2b070ac556c1833f2972330480f434c012d59ef9d3 extends Twig_Template
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
        echo "<a id=\"back\" style=\"margin-left:15px;display:none;\"
   href=\"";
        // line 2
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery_id"])) { $_gallery_id_ = $context["gallery_id"]; } else { $_gallery_id_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $_gallery_id_)), "method"), "html", null, true);
        echo "\">
    &larr; ";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Back to the gallery")), "html", null, true);
        echo "
</a>

<iframe id=\"grid-gallery-preview\" data-post=\"";
        // line 6
        if (isset($context["post_id"])) { $_post_id_ = $context["post_id"]; } else { $_post_id_ = null; }
        echo twig_escape_filter($this->env, $_post_id_, "html", null, true);
        echo "\" src=\"";
        if (isset($context["base_url"])) { $_base_url_ = $context["base_url"]; } else { $_base_url_ = null; }
        echo twig_escape_filter($this->env, $_base_url_, "html", null, true);
        echo "/?p=";
        if (isset($context["post_id"])) { $_post_id_ = $context["post_id"]; } else { $_post_id_ = null; }
        echo twig_escape_filter($this->env, $_post_id_, "html", null, true);
        echo "&preview=true\" frameborder=\"0\" style=\"width:100%;margin: 10px 0 5px -10px;overflow-y:hidden;position: absolute;\"></iframe>

<script>
jQuery(document).ready(function(\$) {
\t\$iframe = \$('#grid-gallery-preview');
\t\$('#wpfooter').hide();
\t\$iframe.height(\$('#wpwrap').height() - 20);
});
</script>";
    }

    public function getTemplateName()
    {
        return "@galleries/preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/preview.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/preview.twig");
    }
}
