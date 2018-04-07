<?php

/* @galleries/helpers/attachment.twig */
class __TwigTemplate_a2853bf730d9290ec235a942e455904cd84b96c0f1cea416171dd0db488e9c92 extends Twig_Template
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
    public function getimage($__attachmentId__ = null, $__settings__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attachmentId" => $__attachmentId__,
            "settings" => $__settings__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            list($context["width"], $context["height"], $context["crop"]) =             array(0, 0, 0);
            // line 3
            echo "
\t";
            // line 4
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()) == 0)) {
                // line 5
                echo "\t\t";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["width"] = $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array());
                // line 6
                echo "\t";
            }
            // line 7
            echo "
\t";
            // line 8
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()) == 0)) {
                // line 9
                echo "\t\t";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["height"] = $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array());
                // line 10
                echo "\t";
            }
            // line 11
            echo "
\t";
            // line 12
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == 3))) {
                // line 13
                echo "\t\t";
                $context["crop"] = 1;
                // line 14
                echo "\t";
            } else {
                // line 15
                echo "\t\t";
                $context["height"] = null;
                // line 16
                echo "\t";
            }
            // line 17
            echo "
\t";
            // line 18
            if (isset($context["attachmentId"])) { $_attachmentId_ = $context["attachmentId"]; } else { $_attachmentId_ = null; }
            if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
            if (isset($context["height"])) { $_height_ = $context["height"]; } else { $_height_ = null; }
            if (isset($context["crop"])) { $_crop_ = $context["crop"]; } else { $_crop_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($_attachmentId_, $_width_, $_height_, $_crop_)), "html", null, true);
            echo "
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
        return "@galleries/helpers/attachment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  81 => 17,  78 => 16,  75 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  56 => 9,  53 => 8,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  37 => 3,  34 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/helpers/attachment.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/helpers/attachment.twig");
    }
}
