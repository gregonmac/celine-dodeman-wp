<?php

/* @galleries/shortcode/style.twig */
class __TwigTemplate_5aa1f468558f7be7fd8179978a7a2fda0828d2d2b73d31e9ef0002f43721e41d extends Twig_Template
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
    public function getprop($__prop__ = null, $__value__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "prop" => $__prop__,
            "value" => $__value__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            if (isset($context["prop"])) { $_prop_ = $context["prop"]; } else { $_prop_ = null; }
            echo twig_escape_filter($this->env, $_prop_, "html", null, true);
            echo ":";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo ";";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 2
    public function getobject($__values__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "values" => $__values__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_values_);
            foreach ($context['_seq'] as $context["prop"] => $context["value"]) {
                if (isset($context["prop"])) { $_prop_ = $context["prop"]; } else { $_prop_ = null; }
                echo twig_escape_filter($this->env, $_prop_, "html", null, true);
                echo ":";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
                echo ";";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['prop'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "@galleries/shortcode/style.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/style.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/shortcode/style.twig");
    }
}
