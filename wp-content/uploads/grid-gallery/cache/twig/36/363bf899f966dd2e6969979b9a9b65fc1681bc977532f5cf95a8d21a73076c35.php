<?php

/* @galleries/helpers/pagination_view.twig */
class __TwigTemplate_e4200dc5b8b733fd0109d8ba3e0869e8998eac4b3f61e52c4e8d2935d0098afb extends Twig_Template
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
    }

    // line 1
    public function getpaginationRender($__settings__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "settings" => $__settings__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/helpers/pagination_view.twig", 2);
            // line 3
            echo "
\t<div class=\"gg-sett-pagination-wrapper\">
\t\t<label class=\"gg-pagination-per-page-lbl\">";
            // line 5
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select images per page")), "html", null, true);
            echo "
\t\t";
            // line 6
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo $_form_->getselect("gg-pagination-per-page", $this->getAttribute($this->getAttribute($_settings_, "info", array()), "perPageArr", array()), $this->getAttribute($this->getAttribute($_settings_, "info", array()), "perPage", array()), array("id" => "gg-pagination-per-page"));
            // line 8
            echo "
\t\t</label>
\t\t<input type=\"hidden\" id=\"ggPaginationViewCurrPage\" value=\"";
            // line 10
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "info", array()), "currPageForJs", array()), "html", null, true);
            echo "\"/>
\t\t<input type=\"hidden\" id=\"ggPaginationViewTotal\" value=\"";
            // line 11
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "info", array()), "total", array()), "html", null, true);
            echo "\"/>
\t\t<div class=\"gg-links-list\">
\t\t\t";
            // line 13
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "info", array(), "any", false, true), "first", array(), "any", true, true) && $this->getAttribute($this->getAttribute($_settings_, "info", array(), "any", false, true), "prev", array(), "any", true, true))) {
                // line 14
                echo "\t\t\t\t<a class=\"gg-sett-pagination-link button\" href=\"";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "info", array()), "first", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("First")), "html", null, true);
                echo "</a>
\t\t\t\t<a class=\"gg-sett-pagination-link button\" href=\"";
                // line 15
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "info", array()), "prev", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Previous")), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 17
            echo "
\t\t\t";
            // line 18
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_settings_);
            foreach ($context['_seq'] as $context["ind1"] => $context["val1"]) {
                // line 19
                echo "\t\t\t\t";
                if (isset($context["ind1"])) { $_ind1_ = $context["ind1"]; } else { $_ind1_ = null; }
                if (($_ind1_ != "info")) {
                    // line 20
                    echo "\t\t\t\t\t";
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    if (isset($context["ind1"])) { $_ind1_ = $context["ind1"]; } else { $_ind1_ = null; }
                    if (($this->getAttribute($this->getAttribute($_settings_, "info", array()), "currentPage", array()) == $_ind1_)) {
                        // line 21
                        echo "\t\t\t\t\t\t<span class=\"gg-sett-pagination-link button active\">";
                        if (isset($context["ind1"])) { $_ind1_ = $context["ind1"]; } else { $_ind1_ = null; }
                        echo twig_escape_filter($this->env, $_ind1_, "html", null, true);
                        echo "</span>
\t\t\t\t\t";
                    } else {
                        // line 23
                        echo "\t\t\t\t\t\t<a class=\"gg-sett-pagination-link button\" href=\"";
                        if (isset($context["val1"])) { $_val1_ = $context["val1"]; } else { $_val1_ = null; }
                        echo twig_escape_filter($this->env, $_val1_, "html", null, true);
                        echo "\">";
                        if (isset($context["ind1"])) { $_ind1_ = $context["ind1"]; } else { $_ind1_ = null; }
                        echo twig_escape_filter($this->env, $_ind1_, "html", null, true);
                        echo "</a>
\t\t\t\t\t";
                    }
                    // line 25
                    echo "
\t\t\t\t";
                }
                // line 27
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['ind1'], $context['val1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
\t\t\t";
            // line 29
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "info", array(), "any", false, true), "next", array(), "any", true, true) && $this->getAttribute($this->getAttribute($_settings_, "info", array(), "any", false, true), "last", array(), "any", true, true))) {
                // line 30
                echo "\t\t\t\t<a class=\"gg-sett-pagination-link button\" href=\"";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "info", array()), "next", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Next")), "html", null, true);
                echo "</a>
\t\t\t\t<a class=\"gg-sett-pagination-link button\" href=\"";
                // line 31
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "info", array()), "last", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Last")), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 33
            echo "\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/helpers/pagination_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 33,  140 => 31,  132 => 30,  129 => 29,  126 => 28,  120 => 27,  116 => 25,  106 => 23,  99 => 21,  94 => 20,  90 => 19,  85 => 18,  82 => 17,  74 => 15,  66 => 14,  63 => 13,  57 => 11,  52 => 10,  48 => 8,  44 => 6,  40 => 5,  36 => 3,  33 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/helpers/pagination_view.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/helpers/pagination_view.twig");
    }
}
