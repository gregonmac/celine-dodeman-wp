<?php

/* @promo/pluginDeactivation.twig */
class __TwigTemplate_22e954236f7c1339a8ec7f4a88309c2bb54b3d2f3e1f973c252a4603d3314009 extends Twig_Template
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
        echo "<style type=\"text/css\">
\t.sggDeactivateDescShell {
\t\tdisplay: none;
\t\tmargin-left: 25px;
\t\tmargin-top: 5px;
\t}
\t.sggDeactivateReasonShell {
\t\tdisplay: block;
\t\tmargin-bottom: 10px;
\t}
\t#sggDeactivateWnd input[type=\"text\"],
\t#sggDeactivateWnd textarea {
\t\twidth: 100%;
\t}
\t#sggDeactivateWnd h4 {
\t\tline-height: 1.53em;
\t}
\t#sggDeactivateWnd + .ui-dialog-buttonpane .ui-dialog-buttonset {
\t\tfloat: none;
\t}
\t.sggDeactivateSkipDataBtn {
\t\tfloat: right;
\t\tmargin-top: 15px;
\t\ttext-decoration: none;
\t\tcolor: #777 !important;
\t}
</style>
<div id=\"sggDeactivateWnd\" style=\"display: none;\" title=\"";
        // line 28
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Your Feedback"), "method"), "html", null, true);
        echo "\">
\t<h4>";
        // line 29
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "If you have a moment, please share why you are deactivating Photo Gallery by Supsystic"), "method"), "html", null, true);
        echo "</h4>
\t<form id=\"sggDeactivateForm\">
\t\t<label class=\"sggDeactivateReasonShell\">
\t\t\t<input type=\"radio\" name=\"deactivate_reason\" value=\"not_working\" />
\t\t\t";
        // line 33
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Couldn't get the plugin to work"), "method"), "html", null, true);
        echo "
\t\t\t<div class=\"sggDeactivateDescShell\">
\t\t\t\t";
        // line 35
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo sprintf($this->getAttribute($_environment_, "translate", array(0 => "If you have a question, <a href=\"%s\" target=\"_blank\">contact us</a> and will do our best to help you"), "method"), "https://supsystic.com/contact-us/?utm_source=plugin&utm_medium=deactivated_contact&utm_campaign=gallery");
        echo "
\t\t\t</div>
\t\t</label>
\t\t<label class=\"sggDeactivateReasonShell\">
\t\t\t<input type=\"radio\" name=\"deactivate_reason\" value=\"found_better\" />
\t\t\t";
        // line 40
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "I found a better plugin"), "method"), "html", null, true);
        echo "
\t\t\t<div class=\"sggDeactivateDescShell\">
\t\t\t\t<input type=\"text\" name=\"better_plugin\" placeholder=\"";
        // line 42
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "If it's possible, specify plugin name"), "method"), "html", null, true);
        echo "\" />
\t\t\t</div>
\t\t</label>
\t\t<label class=\"sggDeactivateReasonShell\">
\t\t\t<input type=\"radio\" name=\"deactivate_reason\" value=\"not_need\" />
\t\t\t";
        // line 47
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "I no longer need the plugin"), "method"), "html", null, true);
        echo "
\t\t</label>
\t\t<label class=\"sggDeactivateReasonShell\">
\t\t\t<input type=\"radio\" name=\"deactivate_reason\" value=\"temporary\" />
\t\t\t";
        // line 51
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "It's a temporary deactivation"), "method"), "html", null, true);
        echo "
\t\t</label>
\t\t<label class=\"sggDeactivateReasonShell\">
\t\t\t<input type=\"radio\" name=\"deactivate_reason\" value=\"other\" />
\t\t\t";
        // line 55
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Other"), "method"), "html", null, true);
        echo "
\t\t\t<div class=\"sggDeactivateDescShell\">
\t\t\t\t<input type=\"text\" name=\"other\" placeholder=\"";
        // line 57
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "What is the reason?"), "method"), "html", null, true);
        echo "\" />
\t\t\t</div>
\t\t</label>
\t</form>
\t<a href=\"\" class=\"sggDeactivateSkipDataBtn\">";
        // line 61
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Skip & Deactivate"), "method"), "html", null, true);
        echo "</a>
</div>";
    }

    public function getTemplateName()
    {
        return "@promo/pluginDeactivation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 61,  113 => 57,  107 => 55,  99 => 51,  91 => 47,  82 => 42,  76 => 40,  67 => 35,  61 => 33,  53 => 29,  48 => 28,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@promo/pluginDeactivation.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Promo/views/pluginDeactivation.twig");
    }
}
