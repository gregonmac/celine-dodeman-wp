<?php

/* @settings/index.twig */
class __TwigTemplate_51367191cdd38e004b5bc414a5b02bd3e80e0c09c4baeaeff156cb25f628284d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@settings/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'beforeSettingsList' => array($this, 'block_beforeSettingsList'),
            'beforeSettings' => array($this, 'block_beforeSettings'),
            'afterSettings' => array($this, 'block_afterSettings'),
            'afterSettingsList' => array($this, 'block_afterSettingsList'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $context["h"] = $this->loadTemplate("@core/helpers.twig", "@settings/index.twig", 5);
        // line 6
        echo "
    <form action=\"";
        // line 7
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["_wpnonce"])) { $__wpnonce_ = $context["_wpnonce"]; } else { $__wpnonce_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "settings", 1 => "saveSettings", 2 => array("_wpnonce" => $__wpnonce_)), "method"), "html", null, true);
        echo "\" method=\"POST\">
        ";
        // line 8
        $this->displayBlock('beforeSettingsList', $context, $blocks);
        // line 14
        echo "        <div class=\"settings-list\">
            ";
        // line 15
        $this->displayBlock('beforeSettings', $context, $blocks);
        // line 16
        echo "            <div class=\"settings\">
\t\t\t\t<div class=\"setting\">
                    <div class=\"setting-description\">
                        <label>";
        // line 19
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Send usage statistics"), "method"), "html", null, true);
        echo "</label>
                        ";
        // line 20
        if (isset($context["h"])) { $_h_ = $context["h"]; } else { $_h_ = null; }
        echo $_h_->getshowTooltip("Send information about what plugin options you prefer to use, this will help us make our solution better for You.", "top", true);
        echo "
                    </div>
                    <div class=\"setting-control\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"settings[send_stats]\" value=\"1\" ";
        // line 23
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "send_stats", array())) {
            echo "checked";
        }
        echo " />
                    </div>
                </div>
                <div class=\"setting\">
                    <div class=\"setting-description\">
                        <label>";
        // line 28
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Image Editor"), "method"), "html", null, true);
        echo "</label>
                        ";
        // line 29
        if (isset($context["h"])) { $_h_ = $context["h"]; } else { $_h_ = null; }
        echo $_h_->getshowTooltip("Image edit library.", "top", true);
        echo "
                    </div>
                    <div class=\"setting-control\">
                        <select name=\"settings[image_editor]\">
                            ";
        // line 33
        $context["editors"] = array("auto" => "Auto", "gd" => "GD", "imagic" => "Imagic");
        // line 38
        echo "                            ";
        if (isset($context["editors"])) { $_editors_ = $context["editors"]; } else { $_editors_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_editors_);
        foreach ($context['_seq'] as $context["name"] => $context["title"]) {
            // line 39
            echo "                                <option value=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"
                                ";
            // line 40
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($_name_ == $this->getAttribute($_settings_, "image_editor", array()))) {
                // line 41
                echo "                                    selected=\"selected\" 
                                ";
            }
            // line 43
            echo "                                >";
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo twig_escape_filter($this->env, $_title_, "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </select>
                    </div>
                </div>
                <div class=\"setting\">
                    <div class=\"setting-description\">

                        <label>";
        // line 52
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Roles"), "method"), "html", null, true);
        echo "</label>
                        ";
        // line 53
        if (isset($context["h"])) { $_h_ = $context["h"]; } else { $_h_ = null; }
        echo $_h_->getshowTooltip("User roles that can use plugin. Administartor is included by default.", "top", true);
        echo "

                        ";
        // line 55
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (($this->getAttribute($_environment_, "isPro", array(), "method") == false)) {
            // line 56
            echo "                            <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('build_pro_url')->getCallable(), array(array("utm_medium" => "manage_roles"))), "html", null, true);
            echo "\">
                                ";
            // line 57
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "PRO option"), "method"), "html", null, true);
            echo "
                            </a>
                        ";
        }
        // line 60
        echo "                    </div>
                    <div class=\"setting-control\">
                        <select multiple=\"multiple\" name=\"settings[access_roles][]\" class=\"chosen-select\" data-placeholder=\"";
        // line 62
        echo "Select avalilable roles to use tables.";
        echo "\">
                            <option value=\"administrator\" disabled selected>Administrator</option>
                            ";
        // line 64
        $context["roles"] = array("editor" => "Editor", "author" => "Author", "contributor" => "Contributor", "subscriber" => "Subscriber");
        // line 70
        echo "                            ";
        if (isset($context["roles"])) { $_roles_ = $context["roles"]; } else { $_roles_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_roles_);
        foreach ($context['_seq'] as $context["role"] => $context["title"]) {
            // line 71
            echo "                                <option value=\"";
            if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
            echo twig_escape_filter($this->env, $_role_, "html", null, true);
            echo "\"
                                ";
            // line 72
            if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (twig_in_filter($_role_, $this->getAttribute($_settings_, "access_roles", array()))) {
                // line 73
                echo "                                    selected=\"selected\" 
                                ";
            }
            // line 75
            echo "                                >";
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo twig_escape_filter($this->env, $_title_, "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['role'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                        </select>
                    </div>
                </div>
            </div>
            ";
        // line 82
        $this->displayBlock('afterSettings', $context, $blocks);
        // line 83
        echo "        </div>
        ";
        // line 84
        $this->displayBlock('afterSettingsList', $context, $blocks);
        // line 85
        echo "    </form>
";
    }

    // line 8
    public function block_beforeSettingsList($context, array $blocks = array())
    {
        // line 9
        echo "            <button class=\"button\">
                <i class=\"fa fa-fw fa-save\"></i>
                ";
        // line 11
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Save"), "method"), "html", null, true);
        echo "
            </button>
        ";
    }

    // line 15
    public function block_beforeSettings($context, array $blocks = array())
    {
    }

    // line 82
    public function block_afterSettings($context, array $blocks = array())
    {
    }

    // line 84
    public function block_afterSettingsList($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@settings/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 84,  244 => 82,  239 => 15,  231 => 11,  227 => 9,  224 => 8,  219 => 85,  217 => 84,  214 => 83,  212 => 82,  206 => 78,  195 => 75,  191 => 73,  187 => 72,  181 => 71,  175 => 70,  173 => 64,  168 => 62,  164 => 60,  157 => 57,  152 => 56,  149 => 55,  143 => 53,  138 => 52,  130 => 46,  119 => 43,  115 => 41,  111 => 40,  105 => 39,  99 => 38,  97 => 33,  89 => 29,  84 => 28,  73 => 23,  66 => 20,  61 => 19,  56 => 16,  54 => 15,  51 => 14,  49 => 8,  43 => 7,  40 => 6,  38 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@settings/index.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Settings/views/index.twig");
    }
}
