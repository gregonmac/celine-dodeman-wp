<?php

/* @galleries/index.twig */
class __TwigTemplate_dd8fc1847e3db000e0801fb7d09fe57f1a0b82323878707f0a03e926e21894a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/index.twig", 1);
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
    </nav>

";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
    <section id=\"gg-galleries\">

        ";
        // line 17
        if ( !array_key_exists("galleries", $context)) {
            // line 18
            echo "            ";
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "
            <div class=\"gg-galleries-grid\">
                ";
            // line 23
            echo "                ";
            if (isset($context["galleries"])) { $_galleries_ = $context["galleries"]; } else { $_galleries_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_galleries_);
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
                // line 24
                echo "                    <div id=\"";
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "\" class=\"gg-item gg-gallery\" style=\"height: auto;\">
                        <h3 class=\"gallery-title\">";
                // line 25
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_title_string_filter($this->env, $this->getAttribute($_gallery_, "title", array()));
                echo "</h3>
                        <div class=\"image\">
                            ";
                // line 28
                echo "                            ";
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                $context["cover"] = call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($_gallery_, "attachment_id", array()), "350", "225", "true"));
                // line 29
                echo "
                            ";
                // line 30
                if (isset($context["cover"])) { $_cover_ = $context["cover"]; } else { $_cover_ = null; }
                if ((twig_length_filter($this->env, $_cover_) < 1)) {
                    // line 31
                    echo "                                ";
                    if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "posts", array()), "postCover", array())) > 1)) {
                        // line 32
                        echo "                                    ";
                        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                        $context["cover"] = $this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "posts", array()), "postCover", array());
                        // line 33
                        echo "                                ";
                    }
                    // line 34
                    echo "                            ";
                }
                // line 35
                echo "                            <img src=\"";
                if (isset($context["cover"])) { $_cover_ = $context["cover"]; } else { $_cover_ = null; }
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, ((array_key_exists("cover", $context)) ? (_twig_default_filter($_cover_, ("holder.js/350x220?theme=gray&text=" . $this->getAttribute($_gallery_, "title", array())))) : (("holder.js/350x220?theme=gray&text=" . $this->getAttribute($_gallery_, "title", array())))), "html", null, true);
                echo "\" alt=\"";
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo $this->getAttribute($_gallery_, "title", array());
                echo "\" width=\"350px\" height=\"220px\"/>
                            ";
                // line 37
                echo "                            ";
                // line 41
                echo "                            <div class=\"sgg-images-info\" style=\"padding-left: 20px;position: relative;\">
                                <h4>
                                    ";
                // line 43
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images: ")), "html", null, true);
                echo "
                                    <div class=\"gg-counter\"
                                         style=\"display: inline-block; font-weight: 200; margin-right: 20px;\"
                                         title=\"";
                // line 46
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("There are %s photos in the gallery %s")), twig_length_filter($this->env, $this->getAttribute($_gallery_, "photos", array())), $this->getAttribute($_gallery_, "title", array())), "html", null, true);
                echo "\">
                                        ";
                // line 47
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, ($this->getAttribute($_gallery_, "total", array()) + (($this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "settings", array(), "any", false, true), "posts", array(), "any", false, true), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "settings", array(), "any", false, true), "posts", array(), "any", false, true), "length", array()), 0)) : (0))), "html", null, true);
                echo "
                                    </div>
                                    ";
                // line 50
                echo "                                    ";
                // line 51
                echo "                                    ";
                // line 52
                echo "                                </h4>
                            </div>
                        </div>
                        <div class=\"controls-wrap\" style=\"display: inline-block; margin-top: 10px;\">
                            <!-- Control buttons -->
                            <ul class=\"gg-control-btn\">
                                <li>
                                    <a href=\"";
                // line 59
                if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
                echo "\"
                                       class=\"button background\">
                                        <i class=\"fa fa-gear\"></i>
                                        ";
                // line 62
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Settings")), "html", null, true);
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
                // line 66
                if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
                echo "\"
                                       class=\"button background\">
                                        <i class=\"fa fa-bars\"></i>
                                        ";
                // line 69
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images list")), "html", null, true);
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
                // line 73
                if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
                echo "\"
                                       class=\"button background\">
                                        <i class=\"fa fa-eye\"></i>
                                        ";
                // line 76
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
                echo "
                                    </a>
                                </li>
                            </ul>
                            <ul class=\"gg-control-btn\">
                                ";
                // line 82
                echo "                                    ";
                // line 83
                echo "                                        ";
                // line 84
                echo "                                        ";
                // line 85
                echo "                                    ";
                // line 86
                echo "                                ";
                // line 87
                echo "                                <li title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
                echo "\">
                                    <button class=\"button button-primary gallery import-to-gallery\" id=\"!sgg-btn-upload\" data-folder-id=\"0\"
                                            data-gallery-id=\"";
                // line 89
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "\" ";
                echo ">
                                        <i class=\"fa fa-fw fa-camera\"></i>
                                        ";
                // line 91
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
                echo "
                                    </button>
                                </li>
                                <li>
                                    <a id=\"delete-gallery\" data-confirm=\"";
                // line 95
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you sure you want to delete this gallery?")), "html", null, true);
                echo "\" class=\"button button-primary\" title=\"Delete this gallery\"
                                       href=\"";
                // line 96
                if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                if (isset($context["_wpnonce"])) { $__wpnonce_ = $context["_wpnonce"]; } else { $__wpnonce_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "delete", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()), "_wpnonce" => $__wpnonce_)), "method"), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-trash-o\"></i>
                                        ";
                // line 98
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete gallery")), "html", null, true);
                echo "
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"shortcode-wrap\">
                            <div class=\"gg-shortcode\">
                                ";
                // line 105
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shortcode:")), "html", null, true);
                echo "<br /><br /> <input type=\"text\" id=\"shortcode-";
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "\" class=\"ggCopyTextCode shortcode\" value=\"[supsystic-gallery id='";
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "']\"><br /><br />
                                ";
                // line 106
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("PHPCode:")), "html", null, true);
                echo "<br /><br /> 
                                <input type=\"text\" id=\"phpcode-";
                // line 107
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
                echo "\" class=\"ggCopyTextCode phpcode\"
                                       value=\"";
                // line 108
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, (("<?php echo do_shortcode('[supsystic-gallery id=" . $this->getAttribute($_gallery_, "id", array())) . "]') ?>"), "html", null, true);
                echo "\">
                            </div>
                        </div>
                    </div>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 113
                echo "                    <h3>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You have no galleries")), "html", null, true);
                echo "</h3>
                    <p>
                        ";
                // line 115
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You don't have any galleries yet.")), "html", null, true);
                echo "
                        <a href=\"";
                // line 116
                if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "showPresets"), "method"), "html", null, true);
                echo "\"
                           id=\"gg-create-gallery-link\"
                           style = \"color: #4ae8ea;\">";
                // line 118
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Want to create one right now?")), "html", null, true);
                echo "</a>
                    </p>

                    <h3>";
                // line 121
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("What is a gallery")), "html", null, true);
                echo "</h3>
                    <p>
                        ";
                // line 123
                echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array("<strong>Gallery</strong> &mdash; the highest type of entity in the Gallery by Supsystic."));
                echo "
                        <br/>
                        ";
                // line 125
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You can have an unlimited number of galleries, to which you can attach the preloaded pictures.")), "html", null, true);
                echo "
                        ";
                // line 126
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Each gallery has a number of display settings and behaviors that you can save to presets and apply to other galleries.")), "html", null, true);
                echo "
                    </p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "            </div>
        ";
        }
        // line 131
        echo "    </section>

    ";
        // line 154
        echo "
    <!-- Create dialog -->
    ";
        // line 197
        echo "
    ";
        // line 198
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/index.twig", 198);
        // line 199
        echo "    <div id=\"importDialog\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
        ";
        // line 200
        if (isset($context["importTypes"])) { $_importTypes_ = $context["importTypes"]; } else { $_importTypes_ = null; }
        echo $_importTypes_->getshow(400);
        echo "
    </div>

";
    }

    // line 133
    public function getputPreset($__data__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 134
            echo "        <div class=\"preset ";
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ((($this->getAttribute($_environment_, "isPro", array(), "method") == false) && $this->getAttribute($_data_, "pro", array()))) {
                echo "disabled";
            }
            echo "\"
             data-preset=\"";
            // line 135
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "value", array()), "html", null, true);
            echo "\">
            <p>";
            // line 136
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($_data_, "title", array())), "html", null, true);
            echo "</p>
            <img src=\"";
            // line 137
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "getModule", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
            echo "/assets/img/";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "image", array()), "html", null, true);
            echo "\" alt=\"\"/>
            ";
            // line 138
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (($this->getAttribute($_data_, "pro", array()) && ($this->getAttribute($_environment_, "isPro", array(), "method") == false))) {
                // line 139
                echo "                <a class=\"button button-primary inPro\"
                    ";
                // line 140
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if (($this->getAttribute($_data_, "title", array()) == "Categories")) {
                    // line 141
                    echo "                        href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\">
                    ";
                }
                // line 143
                echo "                    ";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if (($this->getAttribute($_data_, "title", array()) == "Icons")) {
                    // line 144
                    echo "                        href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\">
                    ";
                }
                // line 146
                echo "                    ";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if (($this->getAttribute($_data_, "title", array()) == "Pagination")) {
                    // line 147
                    echo "                        href=\"http://supsystic.com/plugins/photo-gallery/\" target=\"_blank\">
                    ";
                }
                // line 149
                echo "                    Available in PRO
                </a>
            ";
            }
            // line 152
            echo "        </div>
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
        return "@galleries/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 152,  436 => 149,  432 => 147,  428 => 146,  424 => 144,  420 => 143,  416 => 141,  413 => 140,  410 => 139,  406 => 138,  398 => 137,  393 => 136,  388 => 135,  379 => 134,  367 => 133,  358 => 200,  353 => 199,  351 => 198,  348 => 197,  344 => 154,  340 => 131,  336 => 129,  327 => 126,  323 => 125,  318 => 123,  313 => 121,  307 => 118,  301 => 116,  297 => 115,  291 => 113,  280 => 108,  275 => 107,  271 => 106,  261 => 105,  251 => 98,  243 => 96,  239 => 95,  232 => 91,  225 => 89,  219 => 87,  217 => 86,  215 => 85,  213 => 84,  211 => 83,  209 => 82,  201 => 76,  193 => 73,  186 => 69,  178 => 66,  171 => 62,  163 => 59,  154 => 52,  152 => 51,  150 => 50,  144 => 47,  139 => 46,  133 => 43,  129 => 41,  127 => 37,  117 => 35,  114 => 34,  111 => 33,  107 => 32,  103 => 31,  100 => 30,  97 => 29,  93 => 28,  87 => 25,  81 => 24,  74 => 23,  70 => 20,  67 => 19,  65 => 18,  63 => 17,  58 => 14,  55 => 13,  44 => 8,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/index.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/index.twig");
    }
}
