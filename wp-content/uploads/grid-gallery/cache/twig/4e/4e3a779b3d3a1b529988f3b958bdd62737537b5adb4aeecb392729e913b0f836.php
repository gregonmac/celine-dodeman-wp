<?php

/* @galleries/settings.twig */
class __TwigTemplate_c74bfcc15f7b898a7f182723a64b807ec92014823f9d6d14b92b56b20955deb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/settings.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'tabs' => array($this, 'block_tabs'),
            'preview' => array($this, 'block_preview'),
            'gallery_preview_figure_attributes' => array($this, 'block_gallery_preview_figure_attributes'),
            'gallery_preview_image_attributes' => array($this, 'block_gallery_preview_image_attributes'),
            'settginsFigCaption' => array($this, 'block_settginsFigCaption'),
            'content' => array($this, 'block_content'),
            'proHiddenSettings' => array($this, 'block_proHiddenSettings'),
            'area' => array($this, 'block_area'),
            'galleryTypeSelectorItems' => array($this, 'block_galleryTypeSelectorItems'),
            'openByLink' => array($this, 'block_openByLink'),
            'browserUrlTooltipHide' => array($this, 'block_browserUrlTooltipHide'),
            'disableRightClick' => array($this, 'block_disableRightClick'),
            'mosaicGalleryImageCountText' => array($this, 'block_mosaicGalleryImageCountText'),
            'socialSharing' => array($this, 'block_socialSharing'),
            'horizontalScroll' => array($this, 'block_horizontalScroll'),
            'horizontalScrollAfter' => array($this, 'block_horizontalScrollAfter'),
            'border' => array($this, 'block_border'),
            'shadow' => array($this, 'block_shadow'),
            'popup' => array($this, 'block_popup'),
            'popupLinkedImageText' => array($this, 'block_popupLinkedImageText'),
            'disableSourceImageForLi' => array($this, 'block_disableSourceImageForLi'),
            'popupAfter' => array($this, 'block_popupAfter'),
            'preload' => array($this, 'block_preload'),
            'post' => array($this, 'block_post'),
            'captionSettingsType' => array($this, 'block_captionSettingsType'),
            'overlaySettings' => array($this, 'block_overlaySettings'),
            'backgroundImageForHoverEffect' => array($this, 'block_backgroundImageForHoverEffect'),
            'backgroundColorForShowOnHover' => array($this, 'block_backgroundColorForShowOnHover'),
            'icons' => array($this, 'block_icons'),
            'proCaptionAndIconSettings' => array($this, 'block_proCaptionAndIconSettings'),
            'categories' => array($this, 'block_categories'),
            'pagination' => array($this, 'block_pagination'),
            'watermark' => array($this, 'block_watermark'),
            'form' => array($this, 'block_form'),
            'captionEffectInPro' => array($this, 'block_captionEffectInPro'),
            'captionAndIconEffectsSign' => array($this, 'block_captionAndIconEffectsSign'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
            'modals' => array($this, 'block_modals'),
            'icon_wrap_item_class' => array($this, 'block_icon_wrap_item_class'),
            'settingsOtherPro' => array($this, 'block_settingsOtherPro'),
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

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\" style=\"float: left; padding-top: 20px;\">
        ";
        // line 27
        echo "        <a href=\"";
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 29
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 31
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
        echo "\">";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo $this->getAttribute($_gallery_, "title", array());
        echo "</a>
    </nav>

    <h2 class=\"form-tabs\">
        <a class=\"nav-tab change-tab\" href=\"area\">
            <i class=\"fa fa-home\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"overlay\">
            <i class=\"fa fa-info\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"cats\">
            <i class=\"fa fa-bookmark-o\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"post\">
            <i class=\"fa fa-columns\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts")), "html", null, true);
        echo "</span>
        </a>

        <a class=\"nav-tab change-tab\" href=\"water-m-tab\">
            <i class=\"fa fa-fw fa-certificate\"></i>
\t\t\t<span class=\"nav-tab-item-span\">";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Watermark")), "html", null, true);
        echo "</span>
        </a>
        ";
        // line 59
        $this->displayBlock('tabs', $context, $blocks);
        // line 60
        echo "    </h2>
";
    }

    // line 59
    public function block_tabs($context, array $blocks = array())
    {
    }

    // line 63
    public function block_preview($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "watermark", array(), "any", true, true)) {
            // line 65
            echo "        ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            $context["settingsWatermark"] = twig_array_merge($this->getAttribute($_settings_, "watermark", array()), array("galleryId" => $this->getAttribute($_gallery_, "id", array())));
            // line 66
            echo "        ";
            if (isset($context["settingsWatermark"])) { $_settingsWatermark_ = $context["settingsWatermark"]; } else { $_settingsWatermark_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_attachment_settings')->getCallable(), array("watermark", $_settingsWatermark_)), "html", null, true);
            echo "
    ";
        }
        // line 68
        echo "    ";
        $context["style"] = $this->loadTemplate("@galleries/shortcode/style.twig", "@galleries/settings.twig", 68);
        // line 69
        echo "    ";
        $context["attachment"] = $this->loadTemplate("@galleries/helpers/attachment.twig", "@galleries/settings.twig", 69);
        // line 70
        echo "\t";
        $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/settings.twig", 70);
        // line 71
        echo "
    <div id=\"preview\" class=\"gallery-preview\">
        <section class=\"supsystic-bar-preview\" id=\"single-gallery-toolbar\">
            <ul class=\"supsystic-bar-controls\">
                ";
        // line 82
        echo "
                <li title=\"";
        // line 83
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                    <button class=\"button button-primary gallery import-to-gallery\" data-gallery-id=\"";
        // line 84
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
        echo "\">
                        <i class=\"fa fa-fw fa-camera\"></i>
                        ";
        // line 86
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                    </button>
                </li>

                <li>
                    <a class=\"button\"
                       href=\"";
        // line 92
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-list fa-fw\"></i>
                        ";
        // line 94
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images list")), "html", null, true);
        echo "
                    </a>
                </li>

                <li>
                    <button class=\"button button-primary\" id=\"btnSave\">
                        <i class=\"fa fa-fw fa-check\"></i>
                        ";
        // line 101
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
        echo "
                    </button>
                </li>
            </ul>
        </section>
        ";
        // line 106
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        if ( !twig_test_empty($this->getAttribute($_gallery_, "photos", array()))) {
            // line 107
            echo "            <div style=\"
            ";
            // line 108
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "area", array()), "photo_width", array())))) {
                // line 109
                echo "                width:";
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "area", array()), "photo_width", array()) + 40), "html", null, true);
                echo "px;
            ";
            }
            // line 111
            echo "            margin: 10px auto;
            max-width: 330px;
            clear:both;
            \">
                <figure
\t\t\t\t\t";
            // line 116
            $this->displayBlock('gallery_preview_figure_attributes', $context, $blocks);
            // line 122
            echo "\t\t\t\t\t>
                   ";
            // line 123
            list($context["width"], $context["height"], $context["crop"]) =             array(0, 0, 0);
            // line 124
            echo "
                    ";
            // line 125
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()) == 0)) {
                // line 126
                echo "                        ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["width"] = $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array());
                // line 127
                echo "                    ";
            }
            // line 128
            echo "
                    ";
            // line 129
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()) == 0)) {
                // line 130
                echo "                        ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["height"] = $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array());
                // line 131
                echo "                    ";
            }
            // line 132
            echo "
                    ";
            // line 133
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "2")) || ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "3"))) {
                // line 134
                echo "                        ";
                $context["crop"] = 1;
                // line 135
                echo "                    ";
            } else {
                // line 136
                echo "                        ";
                $context["height"] = null;
                // line 137
                echo "                    ";
            }
            // line 138
            echo "
                    ";
            // line 139
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) {
                // line 140
                echo "                        ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["cropQuality"] = $this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "cropQuality", array());
                // line 141
                echo "                    ";
            } else {
                // line 142
                echo "                        ";
                $context["cropQuality"] = null;
                // line 143
                echo "                    ";
            }
            // line 144
            echo "                    <img
\t\t\t\t\t\t";
            // line 145
            $this->displayBlock('gallery_preview_image_attributes', $context, $blocks);
            // line 161
            echo "\t\t\t\t\t\t/>
\t\t\t\t\t";
            // line 162
            ob_start();
            // line 163
            echo "\t\t\t\t\t\t<figcaption style=\"";
            if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
            echo twig_escape_filter($this->env, twig_trim_filter($_figcaptionStyle_), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div style=\"display: table; height: 100%; width: 100%;\">
\t\t\t\t\t\t\t\t<div class=\"grid-gallery-figcaption-wrap\" style=\"display: table-cell;\">
\t\t\t\t\t\t\t\t\t<span>Gallery by Supsystic</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t";
            $context["figcaptionBlockFree"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 171
            echo "\t\t\t\t\t";
            // line 172
            echo "\t\t\t\t\t\t";
            // line 173
            echo "\t\t\t\t\t";
            // line 174
            echo "\t\t\t\t\t";
            $this->displayBlock('settginsFigCaption', $context, $blocks);
            // line 177
            echo "                </figure>
            </div>
        ";
        } else {
            // line 180
            echo "            <div style=\"clear: both;\"></div>
            <h2 style=\"text-align: center;\">
                ";
            // line 182
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("There're no images in the gallery.")), "html", null, true);
            echo "<br>
                <a class=\"import-to-gallery\" href=\"#\">Add Images</a>
            </h2>
        ";
        }
        // line 186
        echo "
        <div style=\"clear: both;\"></div>

        <div class=\"shortcode-wrap\" style=\"margin-top: 20px\">
            <div class=\"shortcode\">";
        // line 190
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shortcode:")), "html", null, true);
        echo " <input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"[";
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "config", array()), "get", array(0 => "shortcode_name"), "method"), "html", null, true);
        echo " id=";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
        echo "]\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly></div>
            <div class=\"shortcode\">";
        // line 191
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("PHPCode:")), "html", null, true);
        echo " <input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, (("<?php echo do_shortcode('[supsystic-gallery id=" . $this->getAttribute($_gallery_, "id", array())) . "]') ?>"), "html", null, true);
        echo "\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly></div>
        </div>

        <small style=\"left:25px;position:absolute;top:10px;display:none;\">Oops! Transparency doesn't work in live preview. </small>
        <div class=\"separator\"></div>

        <div style=\"margin: 20px 0\" class=\"gg-preview-bottom-bar\">
\t\t\t<a class=\"button button-primary\" target=\"_blank\"
\t\t\t   href=\"";
        // line 199
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-fw fa-eye\"></i>
\t\t\t\t";
        // line 201
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
\t\t\t</a>

            <a class=\"button\" id=\"openSettingsImportDialog\" href=\"\"><i class=\"fa fa-copy\"></i> ";
        // line 204
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings")), "html", null, true);
        echo "</a>
\t\t\t<a class=\"button\" id=\"ggCreateClone\" href=\"#\" target=\"_blank\" data-url=\"";
        // line 205
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["_wpnonce"])) { $__wpnonce_ = $context["_wpnonce"]; } else { $__wpnonce_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("_wpnonce" => $__wpnonce_)), "method"), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-clone\"></i>
\t\t\t\t";
        // line 207
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Clone")), "html", null, true);
        echo "
\t\t\t</a>
        </div>
\t\t<div class=\"gg-sett-preview-other-plugin\">
\t\t\t<label for=\"enableForMembership\" class=\"gg-sett-plugin-member-lbl\">";
        // line 211
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable for Membership:")), "html", null, true);
        echo "</label>
\t\t\t";
        // line 212
        if (isset($context["pageOptions"])) { $_pageOptions_ = $context["pageOptions"]; } else { $_pageOptions_ = null; }
        if (($this->getAttribute($_pageOptions_, "isMembershipPluginActive", array()) == "true")) {
            // line 213
            echo "\t\t\t\t<select id=\"enableForMembership\" style=\"width: auto;\" name=\"plugins[membership][enable]\" ";
            if (isset($context["disableMembershipOpt"])) { $_disableMembershipOpt_ = $context["disableMembershipOpt"]; } else { $_disableMembershipOpt_ = null; }
            echo twig_escape_filter($this->env, $_disableMembershipOpt_, "html", null, true);
            echo " >
\t\t\t\t\t<option value=\"0\" ";
            // line 214
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "plugins", array()), "membership", array()), "enable", array()) == "0")) {
                echo "selected=\"selected\"";
            }
            echo ">
\t\t\t\t\t\t";
            // line 215
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
            echo "
\t\t\t\t\t</option>
\t\t\t\t\t<option value=\"1\" ";
            // line 217
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "plugins", array()), "membership", array()), "enable", array()) == "1")) {
                echo "selected=\"selected\"";
            }
            echo ">
\t\t\t\t\t\t";
            // line 218
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "html", null, true);
            echo "
\t\t\t\t\t</option>
\t\t\t\t</select>
\t\t\t";
        } else {
            // line 222
            echo "\t\t\t\t<div class=\"gg-membership-plug-info\">
\t\t\t\t\t";
            // line 223
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You need to install Membership by Supsystic to use this feature. ")), "html", null, true);
            echo "
\t\t\t\t\t<a target=\"_blank\" href=\"";
            // line 224
            if (isset($context["pageOptions"])) { $_pageOptions_ = $context["pageOptions"]; } else { $_pageOptions_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_pageOptions_, "membershipInstallUrl", array()), "html", null, true);
            echo "\">Install</a>
\t\t\t\t\t";
            // line 225
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(" plugin from your admin area, or visit it's official page on Wordpress.org ")), "html", null, true);
            echo "
\t\t\t\t\t<a target=\"_blank\" href=\"";
            // line 226
            if (isset($context["pageOptions"])) { $_pageOptions_ = $context["pageOptions"]; } else { $_pageOptions_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_pageOptions_, "membershipInstallWpUrl", array()), "html", null, true);
            echo "\">here</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 229
        echo "\t\t</div>
    </div>
\t<input type=\"hidden\" id=\"ggMsgCloningGallery\" value=\"";
        // line 231
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cloning gallery...")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgServerInternalError\" value=\"";
        // line 232
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Server internal error")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgImgOptimizationErrorOcured\" value=\"";
        // line 233
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery image optimization error ocured.")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggIoParams\" value=\"";
        // line 234
        if (isset($context["ioServiceParams"])) { $_ioServiceParams_ = $context["ioServiceParams"]; } else { $_ioServiceParams_ = null; }
        echo twig_escape_filter($this->env, $_ioServiceParams_, "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggCdnParams\" value=\"";
        // line 235
        if (isset($context["cdnServiceParams"])) { $_cdnServiceParams_ = $context["cdnServiceParams"]; } else { $_cdnServiceParams_ = null; }
        echo twig_escape_filter($this->env, $_cdnServiceParams_, "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgOptimized\" value=\"";
        // line 236
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Optimized")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgTransfer\" value=\"";
        // line 237
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transfered")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgOf\" value=\"";
        // line 238
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgImages\" value=\"";
        // line 239
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("images")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgGalleryImageOptimizing\" value=\"";
        // line 240
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Image optimizing...")), "html", null, true);
        echo "\"/>
\t<input type=\"hidden\" id=\"ggMsgGalleryTransferToCnd\" value=\"";
        // line 241
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tranfer images to CDN")), "html", null, true);
        echo "\"/>

\t<div id=\"ggCloneModalWndId\" style=\"display: none;\">
\t\t<label for=\"ggCloneTypeSelector\">";
        // line 244
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select clone type:")), "html", null, true);
        echo "</label>
\t\t";
        // line 245
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getselect("CloneTypeSelector", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select clone type")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Clone with images")), "2" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Clone without images"))), 0, array("style" => "width: auto;", "id" => "ggCloneTypeSelector"));
        // line 253
        echo "
\t</div>

";
    }

    // line 116
    public function block_gallery_preview_figure_attributes($context, array $blocks = array())
    {
        // line 117
        echo "\t\t\t\t\t\tclass=\"grid-gallery-caption\" data-grid-gallery-type=\"center\" style=\"float: none !important;\"
\t\t\t\t\t\t";
        // line 118
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
            // line 119
            echo "\t\t\t\t\t\t\tdata-thumb-overlay-personal=\"1\"
\t\t\t\t\t\t";
        }
        // line 121
        echo "\t\t\t\t\t";
    }

    // line 145
    public function block_gallery_preview_image_attributes($context, array $blocks = array())
    {
        // line 146
        echo "\t\t\t\t\t\t\tsrc=\"";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
        if (isset($context["height"])) { $_height_ = $context["height"]; } else { $_height_ = null; }
        if (isset($context["crop"])) { $_crop_ = $context["crop"]; } else { $_crop_ = null; }
        if (isset($context["cropQuality"])) { $_cropQuality_ = $context["cropQuality"]; } else { $_cropQuality_ = null; }
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "photos", array()), 0, array(), "array"), "attachment", array()), "id", array()), $_width_, $_height_, $_crop_, $_cropQuality_)), "html", null, true);
        echo "\" data-src=\"";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, ("holder.js/350x250?theme=simple&text=" . $this->getAttribute($_gallery_, "title", array())), "html", null, true);
        echo "\" alt=\"";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo $this->getAttribute($_gallery_, "title", array());
        echo "\"
\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\tmax-width: 290px; max-height: 290px;
\t\t\t\t\t\t\t\t";
        // line 149
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array())))) {
            // line 150
            echo "\t\t\t\t\t\t\t\t\twidth:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array()), "html", null, true);
            echo "px;
\t\t\t\t\t\t\t\t";
        } else {
            // line 152
            echo "\t\t\t\t\t\t\t\t\twidth: auto;
\t\t\t\t\t\t\t\t";
        }
        // line 154
        echo "\t\t\t\t\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array())))) {
            // line 155
            echo "\t\t\t\t\t\t\t\t\theight: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array()), "html", null, true);
            echo "px;
\t\t\t\t\t\t\t\t";
        } else {
            // line 157
            echo "\t\t\t\t\t\t\t\t\theight: auto;
\t\t\t\t\t\t\t\t";
        }
        // line 159
        echo "\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t";
    }

    // line 174
    public function block_settginsFigCaption($context, array $blocks = array())
    {
        // line 175
        echo "\t\t\t\t\t\t";
        if (isset($context["figcaptionBlockFree"])) { $_figcaptionBlockFree_ = $context["figcaptionBlockFree"]; } else { $_figcaptionBlockFree_ = null; }
        echo twig_escape_filter($this->env, $_figcaptionBlockFree_, "html", null, true);
        echo "
\t\t\t\t\t";
    }

    // line 258
    public function block_content($context, array $blocks = array())
    {
        // line 259
        echo "    ";
        $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/settings.twig", 259);
        // line 260
        echo "    ";
        $context["f"] = $this;
        // line 261
        echo "
\t<div class=\"gg-wraper-anchor-nav-links\" style=\"display: none;\">
\t\t<a href=\"#gg-anl-main\" class=\"gg-anchor-nav-links\">";
        // line 263
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Type")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-mosaic-image-count-text-wrapper\" class=\"gg-anchor-nav-links ggSettingsDisplNone\" id=\"gg-anl-mosaic-settings-link\">";
        // line 264
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Count Text")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-soc-share\" class=\"gg-anchor-nav-links\">";
        // line 265
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-load-more\" class=\"gg-anchor-nav-links\">";
        // line 266
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load More")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-cust-button\" class=\"gg-anchor-nav-links\">";
        // line 267
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons")), "html", null, true);
        echo "</a>
        <a href=\"#gg-anl-horiz-scroll\" class=\"gg-anchor-nav-links\">";
        // line 268
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-border-type\" class=\"gg-anchor-nav-links\">";
        // line 269
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-shadow\" class=\"gg-anchor-nav-links\">";
        // line 270
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-popup\" class=\"gg-anchor-nav-links\">";
        // line 271
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lightbox")), "html", null, true);
        echo "</a>
\t\t<a href=\"#gg-anl-preloader\" class=\"gg-anchor-nav-links\">";
        // line 272
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loader")), "html", null, true);
        echo "</a>
\t</div>
    <div class=\"settings-wrap\" data-leave-confirm=\"";
        // line 274
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Your changes not saved. You really want to leave without saving?")), "html", null, true);
        echo "\">
        ";
        // line 275
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        if (isset($context["_wpnonce"])) { $__wpnonce_ = $context["_wpnonce"]; } else { $__wpnonce_ = null; }
        echo $_form_->getopen("post", $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "saveSettings", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()), "_wpnonce" => $__wpnonce_)), "method"), array("id" => "form-settings", "class" => "form-gall-settings"));
        echo "
        <input id=\"currentPresetTitle\" name=\"title\" type=\"hidden\" value=\"";
        // line 276
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_settings_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_settings_, "title", array()), "")) : ("")), "html", null, true);
        echo "\"/>
        <input name=\"previewImage\" type=\"hidden\" value=\"";
        // line 277
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "previewImage", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortto]\" type=\"hidden\" value=\"";
        // line 278
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortto", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortby]\" type=\"hidden\" value=\"";
        // line 279
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()), "html", null, true);
        echo "\"/>
\t\t";
        // line 280
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->gethidden("plugins[membership][enable]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "plugins", array()), "membership", array()), "enable", array()), array("id" => "hiddenInpMembershipEnableVal"));
        echo "
\t\t";
        // line 281
        $this->displayBlock('proHiddenSettings', $context, $blocks);
        // line 282
        echo "
        <div data-tab=\"area\">
            ";
        // line 284
        $this->displayBlock('area', $context, $blocks);
        // line 441
        echo "
\t\t\t";
        // line 442
        $this->displayBlock('mosaicGalleryImageCountText', $context, $blocks);
        // line 444
        echo "
            ";
        // line 445
        $this->displayBlock('socialSharing', $context, $blocks);
        // line 589
        echo "
            <div class=\"load-more-button-preview\" id=\"gg-anl-load-more\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 592
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load more gallery images with scroll or button")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\" href=\"";
        // line 594
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">";
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Get PRO"), "method"), "html", null, true);
        echo "</a>
                </h1>
                <div>
                    <a href=\"";
        // line 597
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 598
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/load_more_button_pro.jpg\" />
                    </a>
                </div>
                <div class=\"separator\"></div>
            </div>

            <div class=\"custom-buttons-preview\" id=\"gg-anl-cust-button\">
                <table class=\"form-table\">
                    <thead>
                        ";
        // line 607
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Custom Buttons")), $_form_->getbutton("buttons-presets-editor-preview", "Show preset Editor", array("class" => "button button-primary")), "custom-buttons-preview", true);
        // line 608
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            </div>

\t\t\t";
        // line 614
        $this->displayBlock('horizontalScroll', $context, $blocks);
        // line 652
        echo "
            ";
        // line 653
        $this->displayBlock('border', $context, $blocks);
        // line 698
        echo "
            ";
        // line 699
        $this->displayBlock('shadow', $context, $blocks);
        // line 766
        echo "
            ";
        // line 767
        $this->displayBlock('popup', $context, $blocks);
        // line 1062
        echo "
            ";
        // line 1063
        $this->displayBlock('preload', $context, $blocks);
        // line 1115
        echo "        </div>

        ";
        // line 1117
        $this->displayBlock('post', $context, $blocks);
        // line 1134
        echo "
\t\t<div data-tab=\"overlay\">
\t\t\t";
        // line 1137
        echo "\t\t\t";
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Skwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phophorus Rotate", "phophorus-offset" => "Phophorus Offset", "phophorus-scale" => "Phophorus Scale", "cube" => "Cube", "polaroid" => "Polaroid", "3d-cube" => "3D Cube", "show-on-hover" => "Show on Hover");
        // line 1167
        echo "\t\t\t";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 1174
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["enableCaptions"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 1175
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["polaroidIsEnable"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()) == "polaroid")) ? ("true") : ("false"));
        // line 1176
        echo "
            ";
        // line 1177
        $this->displayBlock('captionSettingsType', $context, $blocks);
        // line 1196
        echo "\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->gethidden("thumbnail[overlay][effect]", (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array()), "quarter-appear")) : ("quarter-appear")), array("id" => "overlayEffect"));
        // line 1200
        echo "
\t\t\t";
        // line 1201
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->gethidden("icons[effect]", $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "effect", array()), array("id" => "iconsEffectName"));
        // line 1203
        echo "

\t\t\t<div class=\"ggCaptionBuilderWrap\">
\t\t\t\t<div class=\"caption-type\" data-gg-cb-type=\"captions-icons\">
\t\t\t\t\t";
        // line 1207
        $this->displayBlock('overlaySettings', $context, $blocks);
        // line 1449
        echo "
\t\t\t\t\t";
        // line 1450
        $this->displayBlock('icons', $context, $blocks);
        // line 1577
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"caption-type\" data-gg-cb-type=\"caption-builder\">
\t\t\t\t\t";
        // line 1579
        $this->displayBlock('proCaptionAndIconSettings', $context, $blocks);
        // line 1581
        echo "\t\t\t\t</div>
\t\t\t</div>
        </div>

        ";
        // line 1585
        $this->displayBlock('categories', $context, $blocks);
        // line 1616
        echo "
        ";
        // line 1617
        $this->displayBlock('watermark', $context, $blocks);
        // line 1632
        echo "
        ";
        // line 1633
        $this->displayBlock('form', $context, $blocks);
        // line 1635
        echo "
        ";
        // line 1636
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getclose();
        echo "

        <div id=\"saveDialog\" title=\"";
        // line 1638
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save settings as preset")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetTitle\">
                    ";
        // line 1641
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preset title:")), "html", null, true);
        echo "
                </label>
            </div>
            <div>
                <input id=\"presetTitle\" type=\"text\" name=\"title\" style=\"width:100%;\" value=\"";
        // line 1645
        if (isset($context["preset"])) { $_preset_ = $context["preset"]; } else { $_preset_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_preset_, "title", array()), "html", null, true);
        echo "\"/>
                <input id=\"settingsId\" type=\"hidden\" name=\"settings_id\" value=\"";
        // line 1646
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\"/>
            </div>
        </div>

        <div id=\"deletePreset\" title=\"";
        // line 1650
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete preset")), "html", null, true);
        echo "\">
            <p>
                ";
        // line 1652
        if (isset($context["preset"])) { $_preset_ = $context["preset"]; } else { $_preset_ = null; }
        echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you really want to delete preset \"%s\"?")), $this->getAttribute($_preset_, "title", array())), "html", null, true);
        echo "
            </p>
            <input type=\"hidden\" id=\"presetId\" value=\"";
        // line 1654
        if (isset($context["preset"])) { $_preset_ = $context["preset"]; } else { $_preset_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_preset_, "id", array()), "html", null, true);
        echo "\">
        </div>

        <div id=\"loadPreset\" title=\"";
        // line 1657
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load settings from presets")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetList\">";
        // line 1659
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select preset:")), "html", null, true);
        echo "</label>
            </div>
            <div>
                <select id=\"presetList\" name=\"presetList\" style=\"width:100%\"></select>
            </div>
            <div id=\"presetListError\">
                <p id=\"presetLoadingFailed\" style=\"display:none\">
                    ";
        // line 1666
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Failed to load the presets.")), "html", null, true);
        echo "
                </p>

                <p id=\"presetEmpty\" style=\"display:none\">
                    ";
        // line 1670
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently you have no presets.")), "html", null, true);
        echo "
                </p>
            </div>
        </div>

        <div id=\"themeDialog\" title=\"";
        // line 1675
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select \"Big image\" theme")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1677
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select a theme")), "html", null, true);
        echo "
            </h1>
            <div>
                ";
        // line 1680
        $context["bigImageThemes"] = array("theme_1" => "Theme 1", "theme_2" => "Theme 2", "theme_3" => "Theme 3", "theme_4" => "Theme 4", "theme_5" => "Theme 5", "theme_6" => "Theme 6", "theme_7" => "Theme 7");
        // line 1689
        echo "
                ";
        // line 1690
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if ($this->getAttribute($_environment_, "isPro", array(), "method")) {
            // line 1691
            echo "                    ";
            if (isset($context["bigImageThemes"])) { $_bigImageThemes_ = $context["bigImageThemes"]; } else { $_bigImageThemes_ = null; }
            $context["bigImageThemes"] = twig_array_merge($_bigImageThemes_, array("theme_1_pro" => "Fullscreen popup"));
            // line 1692
            echo "                ";
        }
        // line 1693
        echo "
                ";
        // line 1694
        if (isset($context["bigImageThemes"])) { $_bigImageThemes_ = $context["bigImageThemes"]; } else { $_bigImageThemes_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_bigImageThemes_);
        foreach ($context['_seq'] as $context["value"] => $context["name"]) {
            // line 1695
            echo "                    <div class=\"grid-gallery-caption ";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($_value_ == $this->getAttribute($this->getAttribute($_settings_, "box", array()), "theme", array()))) {
                echo "gg-active";
            }
            echo "\">
                        <img data-name=\"";
            // line 1696
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" data-val=\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\" class=\"theme dialog-image\"
                             src=\"";
            // line 1697
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "getModule", array(0 => "colorbox"), "method"), "getThemeScreenshotUrl", array(0 => $_value_), "method"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"
                             title=\"";
            // line 1698
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"/>
                        <div class=\"select-element\">
                            <h3>";
            // line 1700
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "</h3>
                        </div>
\t\t\t\t\t\t<div class=\"gg-selected-theme\">
\t\t\t\t\t\t\t<div class=\"gg-selected-theme-txt\">";
            // line 1703
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(("Selected " . $_name_))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t</div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1707
        echo "
            </div>
        </div>

        <div id=\"effectDialog\" title=\"";
        // line 1711
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\">
            <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
                ";
        // line 1713
        if (isset($context["effects"])) { $_effects_ = $context["effects"]; } else { $_effects_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_effects_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 1714
            echo "                    ";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (($_type_ == "direction-aware")) {
                // line 1715
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo "\">
                            <div class=\"box\">
                                <div class=\"box__right\">Right → Left</div>
                                <div class=\"box__left\">Left → Right</div>
                                <div class=\"box__top\">Top → Bottom</div>
                                <div class=\"box__bottom\">Bottom → Top</div>
                                <div class=\"box__center\">
                                </div>
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1723
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" class=\"dialog-image\">
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 1726
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
\t\t\t\t\t";
            } elseif (twig_in_filter($_type_, array(0 => "show-on-hover"))) {
                // line 1730
                echo "\t\t\t\t\t\t";
                $this->displayBlock('captionEffectInPro', $context, $blocks);
                // line 1747
                echo "                    ";
            } elseif (($_type_ == "3d-cube")) {
                // line 1748
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo "\">
                            <div class=\"box-3d-cube-scene\" style=\"perspective: 300px;-webkit-perspective: 300px\">
                                <div class=\"box-3d-cube\"
                                     style=\"
                                         transform-origin:50% 50% -75px;
                                         -ms-transform-origin: 50% 50% -75px;
                                         -webkit-transform-origin: 50% 50% -75px;
                                         width:150px; height:150px
                                     \"
                                >
                                    <div class=\"face front\" style=\"width:150px; height:150px\">
                                        <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1759
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" class=\"dialog-image\">
                                    </div>
                                    <div style=\"";
                // line 1761
                if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
                echo twig_escape_filter($this->env, twig_trim_filter($_figcaptionStyle_), "html", null, true);
                echo "width:150px; height:150px\" class=\"face back\">
                                        <div class=\"grid-gallery-figcaption-wrap\">
                                            <span>";
                // line 1763
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 1769
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            } else {
                // line 1773
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo "\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1774
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" class=\"dialog-image\">
                            <figcaption style=\"";
                // line 1775
                if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
                echo twig_escape_filter($this->env, twig_trim_filter($_figcaptionStyle_), "html", null, true);
                echo "\">
                                <div class=\"grid-gallery-figcaption-wrap\" style=\"width:100%;height:100%;top:0;\">
                                    <div style=\"display:table;width:100%;height:100%;\">
                                        <span style=\"display:table-cell;font-size:";
                // line 1778
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                echo ";padding:10px;vertical-align:";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                echo ";\">Caption</span>
                                    </div>
                                </div>
                            </figcaption>
                            <div class=\"select-element\">
                                ";
                // line 1783
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            }
            // line 1787
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1788
        echo "                <div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
                <div class=\"captions-effect-with-icons\" data-confirm=\"";
        // line 1789
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
        echo "\">
\t\t\t\t\t";
        // line 1790
        $this->displayBlock('captionAndIconEffectsSign', $context, $blocks);
        // line 1793
        echo "                    ";
        $this->displayBlock('iconsEffects', $context, $blocks);
        // line 1817
        echo "                </div>
            </div>
        </div>

        <div id=\"shadowDialog\" title=\"";
        // line 1821
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow preset")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1823
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow")), "html", null, true);
        echo "
            </h1>
            <div class=\"shadow-dialog-wrapper\">
                ";
        // line 1826
        $context["shadowPresets"] = array("effect_1" => array("name" => "Effect 1", "offset_x" => "8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_2" => array("name" => "Effect 2", "offset_x" => "-8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_3" => array("name" => "Effect 3", "offset_x" => "-8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_4" => array("name" => "Effect 4", "offset_x" => "8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_5" => array("name" => "Effect 5", "offset_x" => "8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_6" => array("name" => "Effect 6", "offset_x" => "-8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_7" => array("name" => "Effect 7", "offset_x" => "0", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_8" => array("name" => "Effect 8", "offset_x" => "0", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_9" => array("name" => "Effect 9", "offset_x" => "0", "offset_y" => "4", "blur" => "10", "color" => "rgba(0, 0, 0, 1.0)"), "effect_10" => array("name" => "Effect 10", "offset_x" => "0", "offset_y" => "-4", "blur" => "8", "color" => "rgba(0, 0, 0, 1.0)"));
        // line 1898
        echo "

                ";
        // line 1900
        if (isset($context["shadowPresets"])) { $_shadowPresets_ = $context["shadowPresets"]; } else { $_shadowPresets_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_shadowPresets_);
        foreach ($context['_seq'] as $context["value"] => $context["effect"]) {
            // line 1901
            echo "                    <div class=\"grid-gallery-caption\" style=\"float: left; margin-left: 15px; cursor: pointer;\">
                        <div class=\"shadow-preset\" data-offset-x=\"";
            // line 1902
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "offset_x", array()), "html", null, true);
            echo "\" data-offset-y=\"";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "offset_y", array()), "html", null, true);
            echo "\" data-blur=\"";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "blur", array()), "html", null, true);
            echo "\" data-color=\"";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "color", array()), "html", null, true);
            echo "\"
                             style=\"margin: 20px; box-shadow: ";
            // line 1903
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "offset_x", array()), "html", null, true);
            echo "px ";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "offset_y", array()), "html", null, true);
            echo "px ";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "blur", array()), "html", null, true);
            echo "px ";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "color", array()), "html", null, true);
            echo ";\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 1904
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "name", array()), "html", null, true);
            echo "\" class=\"dialog-image\"/>
                        </div>
                        <div class=\"select-element\">
                            ";
            // line 1907
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['effect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1911
        echo "
            </div>
        </div>

        <div id=\"reviewNotice\" title=\"Review\" hidden>
            <h3>Hey, I noticed you just use Gallery by Supsystic over a week – that’s awesome!</h3>
            <p>Could you please do me a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation.</p>

            <ul style=\"list-style: circle; padding-left: 30px;\">
                <li>
                    <button class=\"button button-primary\"><a href=\"//wordpress.org/support/view/plugin-reviews/gallery-by-supsystic?rate=5#postform\" target=\"_blank\" class=\"bupSendStatistic\" data-statistic-code=\"is_shown\" style=\"color:#000000 !important;\">Ok, you deserve it</a></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">Nope, maybe later</span></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">I already did</span></button>
                </li>
            </ul>
        </div>

        <div id=\"settingsImportDialog\" title=\"Import\" hidden>
            <div class=\"import\">
                <p>";
        // line 1934
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings from gallery")), "html", null, true);
        echo "</p>
                <select class=\"list\"></select>
            </div>
            <div class=\"import-not-available\" style=\"display:none\">
                <p>";
        // line 1938
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you can import settings from other galleries, but right now, you have only one gallery, create more - and see how it works")), "html", null, true);
        echo "</p>
            </div>
        </div>

        ";
        // line 1942
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/settings.twig", 1942);
        // line 1943
        echo "        <div id=\"importDialog\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
            ";
        // line 1944
        if (isset($context["importTypes"])) { $_importTypes_ = $context["importTypes"]; } else { $_importTypes_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo $_importTypes_->getshow(400, $this->getAttribute($_gallery_, "id", array()));
        echo "
        </div>

        <div class=\"buttons-edit-preset-dialog-preview\" title=\"";
        // line 1947
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons preset editor for Paginations, Categories and Load More buttons")), "html", null, true);
        echo "\">
            <a href=\"";
        // line 1948
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                <img src=\"";
        // line 1949
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/custom_button_icon_pro.jpg\" />
            </a>
        </div>
        <div class=\"loader-dialog-preview\" title=\"";
        // line 1952
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Improve free version")), "html", null, true);
        echo "\" style=\"line-height: 200%;\">
            Please be advised that this option is available only in <u>Pro version</u>. You can
            <a  href=\"";
        // line 1954
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" class=\"button\">
                Get PRO
            </a>
            today and get this and other PRO options for Galleries!
        </div>
    </div>

    ";
        // line 1961
        $this->displayBlock('modals', $context, $blocks);
        // line 2011
        echo "
\t";
        // line 2012
        $this->displayBlock('settingsOtherPro', $context, $blocks);
    }

    // line 281
    public function block_proHiddenSettings($context, array $blocks = array())
    {
    }

    // line 284
    public function block_area($context, array $blocks = array())
    {
        // line 285
        echo "                <table class=\"form-table\" name=\"area\" id=\"gg-anl-main\">
                    <thead>
\t\t\t\t\t\t";
        // line 287
        $this->displayBlock('galleryTypeSelectorItems', $context, $blocks);
        // line 306
        echo "
                        <tr id=\"generalColumnsRow\" hidden>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
        // line 310
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Number of Columns")), "html", null, true);
        echo "
        \t\t\t\t\t\t\t";
        // line 311
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getshow_tooltip("columns");
        echo "
        \t\t\t\t\t\t\t<br />
        \t\t\t\t\t\t\t<label><a href=\"http://supsystic.com/fixed-columns-gallery-example/\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">More Info</a> </label>
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" name=\"general[columns][number]\" value=\"";
        // line 317
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)), "html", null, true);
        echo "\">
                            </td>
                        </tr>

                        ";
        // line 321
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Responsive columns")), ((((((((((((($_form_->getinput("number", "general[responsiveColumns][desktop][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array()), 1200)) : (1200)), array("style" => array("width" => "60px;"))) . $_form_->getspan("", "px")) . $_form_->getinput("number", "general[responsiveColumns][desktop][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $_form_->getspan("", "columns")) . "<br>") . $_form_->getinput("number", "general[responsiveColumns][tablet][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array()), 768)) : (768)), array("style" => array("width" => "60px;")))) . $_form_->getspan("", "px")) . $_form_->getinput("number", "general[responsiveColumns][tablet][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $_form_->getspan("", "columns")) . "<br>") . $_form_->getinput("number", "general[responsiveColumns][mobile][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array()), 320)) : (320)), array("style" => array("width" => "60px;")))) . $_form_->getspan("", "px")) . $_form_->getinput("number", "general[responsiveColumns][mobile][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $_form_->getspan("", "columns")), "responsive-columns");
        // line 330
        echo "

                        ";
        // line 334
        echo "    \t\t\t\t\t
    \t\t\t\t\t";
        // line 335
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name:")), $_form_->getinput("text", "title", $this->getAttribute($_gallery_, "title", array()), array("style" => array("width" => "232px;"))), "title");
        // line 337
        echo "

                        ";
        // line 339
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow($this->getAttribute($_environment_, "translate", array(0 => "Gallery Position"), "method"), $_form_->getselect("area[position]", array(0 => "Left", 1 => "Center", 2 => "Right"), (($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "position", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "position", array()), 1)) : (1)), array("style" => "width: 100px;")));
        // line 340
        echo "


                        ";
        // line 343
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images distance")), ($_form_->getinput("number", "area[distance]", $this->getAttribute($this->getAttribute($_settings_, "area", array()), "distance", array()), array("style" => array("width" => "140px;"))) . $_form_->getspan("", "pixels")), "distance");
        // line 345
        echo "

                        ";
        // line 347
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery width")), ($_form_->getinput("number", "area[width]", $this->getAttribute($this->getAttribute($_settings_, "area", array()), "width", array()), array("style" => array("width" => "140px"))) . $_form_->getselect("area[width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($_settings_, "area", array()), "width_unit", array()), array("style" => "margin-top: -2px; height: 27px;"))), "area-width");
        // line 349
        echo "

                        ";
        // line 352
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Full screen width")), $_form_->getcheckbox("fullscreen", "1", (($this->getAttribute($_settings_, "fullscreen", array())) ? (array("checked" => "checked")) : (array()))), "full-screen-width");
        // line 359
        echo "

                        ";
        // line 361
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery padding")), ($_form_->getinput("number", "area[padding]", (($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "padding", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "padding", array()), 0)) : (0)), array("style" => array("width" => "140px"))) . $_form_->getspan("", "pixels")), "area-padding");
        // line 362
        echo "

                        ";
        // line 369
        echo "
                        ";
        // line 370
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image width")), ($_form_->getinput("number", "area[photo_width]", $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array()), array("style" => array("width" => "140px"))) . $_form_->getselect("area[photo_width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-width");
        // line 372
        echo "


                        ";
        // line 375
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image height")), ($_form_->getinput("number", "area[photo_height]", $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array()), array("style" => array("width" => "140px"))) . $_form_->getselect("area[photo_height_unit]", array(0 => "pixels"), $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-height");
        // line 377
        echo "

                        ";
        // line 379
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image radius")), ($_form_->getinput("number", "thumbnail[border][radius]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius", array()), array("style" => array("width" => "140px"))) . $_form_->getselect("thumbnail[border][radius_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "border-radius");
        // line 381
        echo "

                        ";
        // line 384
        echo "                        ";
        $context["qualityList"] = array("100" => "100%", "90" => "90%", "80" => "80%", "70" => "70%", "60" => "60%", "50" => "50%", "40" => "40%", "30" => "30%", "20" => "20%", "10" => "10%");
        // line 396
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["qualityList"])) { $_qualityList_ = $context["qualityList"]; } else { $_qualityList_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image crop quality")), $_form_->getselect("thumbnail[cropQuality]", $_qualityList_, (($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100"))), "cropQuality");
        // line 403
        echo "

                        ";
        // line 405
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Display only first image")), $_form_->getcheckbox("displayFirstPhoto", "on", ((($this->getAttribute($_settings_, "displayFirstPhoto", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "display-first-photo", null, "display-first-photo-row");
        // line 414
        echo "

                        ";
        // line 416
        $this->displayBlock('openByLink', $context, $blocks);
        // line 424
        echo "
\t\t\t\t\t\t";
        // line 425
        $this->displayBlock('browserUrlTooltipHide', $context, $blocks);
        // line 434
        echo "
                        ";
        // line 435
        $this->displayBlock('disableRightClick', $context, $blocks);
        // line 437
        echo "                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 287
    public function block_galleryTypeSelectorItems($context, array $blocks = array())
    {
        // line 288
        echo "\t\t\t\t\t\t\t";
        $context["galleryTypeObj"] = array(0 => array("value" => "0", "title" => "Fixed"), 1 => array("value" => "1", "title" => "Vertical"), 2 => array("value" => "2", "title" => "Horizontal"), 3 => array("value" => "3", "title" => "Fixed Columns"), 4 => array("value" => "4", "title" => (("Mosaic(" . call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Available in Pro"))) . ")"), "disabled" => 1));
        // line 295
        echo "
\t\t\t\t\t\t\t";
        // line 296
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["galleryTypeObj"])) { $_galleryTypeObj_ = $context["galleryTypeObj"]; } else { $_galleryTypeObj_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Type")), $_form_->getselectWithElem("area[grid]", $_galleryTypeObj_, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()), array("style" => "width: auto;")), "grid-type", "gallery-types", "columns");
        // line 304
        echo "
\t\t\t\t\t\t";
    }

    // line 416
    public function block_openByLink($context, array $blocks = array())
    {
        // line 417
        echo "                            ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open by link in popup")), "utm_source=plugin&utm_medium=open-by-link&utm_campaign=gallery", "open-by-link", $_form_->getcheckbox("openByLink", "on", array("disabled" => "disabled")));
        // line 422
        echo "
                        ";
    }

    // line 425
    public function block_browserUrlTooltipHide($context, array $blocks = array())
    {
        // line 426
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide browser url tooltip on image hover")), "utm_source=plugin&utm_medium=browser-url-tooltip-hide&utm_campaign=gallery", "browserUrlTooltipHideFree", $_form_->getcheckbox("browserUrlTooltipHideFree", "on", array("disabled" => "disabled")));
        // line 432
        echo "
\t\t\t\t\t\t";
    }

    // line 435
    public function block_disableRightClick($context, array $blocks = array())
    {
        // line 436
        echo "                        ";
    }

    // line 442
    public function block_mosaicGalleryImageCountText($context, array $blocks = array())
    {
        // line 443
        echo "\t\t\t";
    }

    // line 445
    public function block_socialSharing($context, array $blocks = array())
    {
        // line 446
        echo "                <table class=\"form-table\" id=\"gg-anl-soc-share\">
                    <thead>
                    ";
        // line 448
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["f"])) { $_f_ = $context["f"]; } else { $_f_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Sharing")), ((($_form_->getradio("socialSharing[enabled]", true, twig_array_merge(array("id" => "social-sharing-enable"), (($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array())))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "social-sharing-enable")) . $_form_->getradio("socialSharing[enabled]", false, twig_array_merge(array("id" => "social-sharing-disable"), (($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "enabled", array())) ? (array()) : (array("checked" => "checked")))))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "social-sharing-disable")), "social-sharing", true);
        // line 452
        echo "
                    </thead>
                    <tbody style=\"display: none;\">
                    ";
        // line 455
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "pluginInstalled", array())) {
            // line 456
            echo "                        ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "projectsList", array()))) {
                // line 457
                echo "

                            ";
                // line 459
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Buttons Project")), $_form_->getselect("socialSharing[projectId]", $this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "projectsList", array()), $this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "projectId", array()), array("style" => "width: 200px")), "social-buttons-project");
                // line 464
                echo "

                            ";
                // line 466
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Sharing")), $_form_->getcheckbox("socialSharing[gallerySharing][enabled]", true, (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "gallerySharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array()))), "gallery-social-sharing");
                // line 467
                echo "

                            ";
                // line 469
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")), $_form_->getselect("socialSharing[gallerySharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "all" => "top and bottom"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "gallery-sharing-buttons-position");
                // line 478
                echo "

                            ";
                // line 480
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $_form_->getrow("", $_form_->getcheckbox("socialSharing[imageSharing][enabled]", "0", array("checked" => "checked")), "image-sharing-hidden");
                // line 481
                echo "

                            ";
                // line 483
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "enabled", array());
                // line 484
                echo "                            ";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["enabled"])) { $_enabled_ = $context["enabled"]; } else { $_enabled_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Sharing")), $_form_->getcheckbox("socialSharing[imageSharing][enabled]", true, ((($_enabled_ != "0")) ? (array("checked" => "checked")) : (array()))), "image-social-sharing");
                // line 485
                echo "

                            ";
                // line 487
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")), $_form_->getselect("socialSharing[imageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "image-sharing-buttons-position");
                // line 497
                echo "

                            ";
                // line 499
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")), $_form_->getselect("socialSharing[imageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-horizontal");
                // line 508
                echo "

                            ";
                // line 510
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")), $_form_->getselect("socialSharing[imageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-vertical");
                // line 519
                echo "

                            ";
                // line 521
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $_form_->getrow("", $_form_->getcheckbox("socialSharing[popupImageSharing][enabled]", "0", array("checked" => "checked")), "popup-sharing-hidden");
                // line 522
                echo "

                            ";
                // line 524
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "enabled", array());
                // line 525
                echo "                            ";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["enabled"])) { $_enabled_ = $context["enabled"]; } else { $_enabled_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Sharing")), $_form_->getcheckbox("socialSharing[popupImageSharing][enabled]", true, ((($_enabled_ != "0")) ? (array("checked" => "checked")) : (array()))), "popup-social-sharing");
                // line 526
                echo "

                            ";
                // line 528
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")), $_form_->getselect("socialSharing[popupImageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "popup-sharing-buttons-position");
                // line 538
                echo "

                            ";
                // line 540
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")), $_form_->getselect("socialSharing[popupImageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-horizontal");
                // line 549
                echo "

                            ";
                // line 551
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")), $_form_->getselect("socialSharing[popupImageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-vertical");
                // line 560
                echo "

                        ";
            } else {
                // line 563
                echo "                            <tr>
                                <td colspan=\"2\">
                                    <span>";
                // line 565
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You have no Social Sharing projects for now.")), "html", null, true);
                echo " </span>
                                    <a href=\"/wp-admin/admin.php?page=supsystic-social-sharing&module=projects&action=add\"
                                       target=\"_blank\" rel=\"noopener noreferrer\"
                                    >";
                // line 568
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create your first project")), "html", null, true);
                echo "</a>
                                    <span> ";
                // line 569
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("then just reload page with your Gallery settings, and you will see list with available Social Projects for your Gallery.")), "html", null, true);
                echo "</span>
                                </td>
                            </tr>
                        ";
            }
            // line 573
            echo "                    ";
        } else {
            // line 574
            echo "                        <tr>
                            <td colspan=\"2\">
                                <span>";
            // line 576
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You need to install Social Share Buttons by Supsystic to use this feature.")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"/wp-admin/plugin-install.php?tab=search&type=term&s=Social+Share+Buttons+by+Supsystic\"
                                >";
            // line 578
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Install plugin")), "html", null, true);
            echo "</a>
                                <span> ";
            // line 579
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("from your admin area, or visit it's official page on Wordpress.org")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://wordpress.org/plugins/social-share-buttons-by-supsystic/\"> ";
            // line 580
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("here.")), "html", null, true);
            echo "</a>
                            </td>

                        </tr>
                    ";
        }
        // line 585
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 614
    public function block_horizontalScroll($context, array $blocks = array())
    {
        // line 615
        echo "\t\t\t\t<table class=\"form-table\" id=\"gg-anl-horiz-scroll\">
\t\t\t\t\t<thead>
\t\t\t\t\t";
        // line 617
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["horizontalScrollEnabled"] = ((($this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 618
        echo "\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["horizontalScrollEnabled"])) { $_horizontalScrollEnabled_ = $context["horizontalScrollEnabled"]; } else { $_horizontalScrollEnabled_ = null; }
        if (isset($context["f"])) { $_f_ = $context["f"]; } else { $_f_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Horizontal Scroll")), ((($_form_->getradio("horizontalScroll[enabled]", "true", twig_array_merge(array("id" => "horizontal-scroll-enable"), (($_horizontalScrollEnabled_) ? (array("checked" => "checked")) : (array())))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "horizontal-scroll-enable")) . $_form_->getradio("horizontalScroll[enabled]", "false", twig_array_merge(array("id" => "horizontal-scroll-disable"), (($_horizontalScrollEnabled_) ? (array()) : (array("checked" => "checked")))))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "horizontal-scroll-disable")), "horizontal-scroll", true);
        // line 622
        echo "
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 625
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Color")), $_form_->gettext("horizontalScroll[color]", $this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array()), "color", array()), array("class" => "gg-color-picker")), "horizontal-scroll-color");
        // line 626
        echo "

\t\t\t\t\t";
        // line 628
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Transparency")), $_form_->getselect("horizontalScroll[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array(), "any", false, true), "transparency", array()), "60")) : ("60")), array("style" => "width: auto")), "horizontal-scroll-transparency");
        // line 644
        echo "

\t\t\t\t\t";
        // line 646
        $this->displayBlock('horizontalScrollAfter', $context, $blocks);
        // line 648
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"separator\"></div>
\t\t\t";
    }

    // line 646
    public function block_horizontalScrollAfter($context, array $blocks = array())
    {
        // line 647
        echo "\t\t\t\t\t";
    }

    // line 653
    public function block_border($context, array $blocks = array())
    {
        // line 654
        echo "                <table class=\"form-table\" name=\"border\" id=\"gg-anl-border-type\">
                    <thead>
                        ";
        // line 656
        $context["borderTypes"] = array("solid" => "Solid", "dotted" => "Dotted", "dashed" => "Dashed", "double" => "Double", "groove" => "Groove", "ridge" => "Ridge", "inset" => "Inset", "outset" => "Outset", "none" => "None");
        // line 667
        echo "
                        ";
        // line 683
        echo "
                        ";
        // line 684
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["borderTypes"])) { $_borderTypes_ = $context["borderTypes"]; } else { $_borderTypes_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border Type")), ($_form_->getselect("thumbnail[border][type]", $_borderTypes_, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "type", array()), array("style" => "width: auto;")) . $_form_->getinput("text", "border-type", "Example", array("style" => "margin-top: -2px; height: 27px; width: 70px; border: 1px solid black; display:none;"))), "border-type", "gallery-borders");
        // line 686
        echo "

                        ";
        // line 688
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border color")), $_form_->getinput("text", "thumbnail[border][color]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "color", array()), array("class" => "gg-color-picker")), "border-color");
        // line 689
        echo "

                        ";
        // line 691
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border width")), ($_form_->getinput("number", "thumbnail[border][width]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "width", array()), array("style" => array("width" => "140px;"))) . $_form_->getspan("", "pixels")), "border-width");
        // line 693
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 699
    public function block_shadow($context, array $blocks = array())
    {
        // line 700
        echo "                <table class=\"form-table\" name=\"shadow\" id=\"gg-anl-shadow\">
                    <thead>
                        <tr id=\"useShadowRow\">
                            <th scope=\"row\">
                                <h3 style=\"margin: 0 !important;\">
                                    ";
        // line 705
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
        echo "
                                </h3>
                            </th>
                            <td>
                                <input type=\"radio\" id=\"showShadow\" name=\"use_shadow\" value=\"1\" ";
        // line 709
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "use_shadow", array()) == "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 710
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "html", null, true);
        echo "
                                <input type=\"radio\" id=\"hideShadow\" name=\"use_shadow\" value=\"0\" ";
        // line 711
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "use_shadow", array()) != "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 712
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope=\"row\">
                                ";
        // line 719
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow preset")), "html", null, true);
        echo "
                            </th>
                            <td>
                                <button id=\"chooseShadowPreset\" class=\"button bordered\" type=\"button\">
                                    ";
        // line 723
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose preset")), "html", null, true);
        echo "
                                </button>
                            </td>
                        </tr>

                        <tr id=\"useMouseShadowRow\">
                            <th scope=\"row\">
                                ";
        // line 730
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When mouse is over")), "html", null, true);
        echo "
                                ";
        // line 731
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getshow_tooltip("when-mouse-is-over");
        echo "
                            </th>
                            <td>
                                <select id=\"useMouseOverShadow\" style=\"width: auto;\" name=\"mouse_shadow\">
                                    <option value=\"0\" ";
        // line 735
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "mouse_shadow", array()) == "0")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 736
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Off")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"1\" ";
        // line 738
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "mouse_shadow", array()) == "1")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 739
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show mouse on")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"2\" ";
        // line 741
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "mouse_shadow", array()) == "2")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 742
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide mouse on")), "html", null, true);
        echo "
                                    </option>
                                </select>
                            </td>
                        </tr>

                        ";
        // line 748
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay image with shadow")), $_form_->getselect("thumbnail[shadow][overlay]", array(0 => "Off", 1 => "On"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "overlay", array()), array("style" => "width: auto;")), "overlay-type");
        // line 749
        echo "

                        ";
        // line 751
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow color")), $_form_->gettext("thumbnail[shadow][color]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "color", array()), array("style" => array("width" => "300px"), "class" => "gg-color-picker")), "shadow-color");
        // line 752
        echo "

                        ";
        // line 754
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow blur")), $_form_->getinput("number", "thumbnail[shadow][blur]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "blur", array()), array("style" => array("width" => "auto"))), "shadow-blur");
        // line 755
        echo "

                        ";
        // line 757
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow X")), $_form_->getinput("number", "thumbnail[shadow][x]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "x", array()), array("style" => array("width" => "auto"))), "shadow-x");
        // line 758
        echo "

                        ";
        // line 760
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow Y")), $_form_->getinput("number", "thumbnail[shadow][y]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "y", array()), array("style" => array("width" => "auto"))), "shadow-y");
        // line 761
        echo "
                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 767
    public function block_popup($context, array $blocks = array())
    {
        // line 768
        echo "                <table class=\"form-table\" id=\"gg-anl-popup\">
                    <thead>
                        ";
        // line 771
        echo "                        ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["popUpEnabled"] = ((($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 772
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["popUpEnabled"])) { $_popUpEnabled_ = $context["popUpEnabled"]; } else { $_popUpEnabled_ = null; }
        if (isset($context["f"])) { $_f_ = $context["f"]; } else { $_f_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop-up Image")), ((($_form_->getradio("box[enabled]", "true", twig_array_merge(array("id" => "box-enable"), (($_popUpEnabled_) ? (array("checked" => "checked")) : (array())))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "box-enable")) . $_form_->getradio("box[enabled]", "false", twig_array_merge(array("id" => "box-disable"), (($_popUpEnabled_) ? (array()) : (array("checked" => "checked")))))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "box-disable")), "box", true);
        // line 791
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 795
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup box theme")), (($_form_->getbutton("chooseTheme", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose theme")), array("class" => "button bordered", "id" => "chooseTheme")) . $_form_->gethidden("box[type]", $this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()))) . $_form_->gethidden("box[theme]", $this->getAttribute($this->getAttribute($_settings_, "box", array()), "theme", array()), array("id" => "bigImageTheme"))));
        // line 810
        echo "

                        ";
        // line 813
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable on mobile")), $_form_->getcheckbox("box[mobile]", "on", ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "mobile", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "mobile");
        // line 820
        echo "

                        ";
        // line 823
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Text")), $_form_->getselect("box[imageText]", array("data-caption" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "imageText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "imageText", array()), "data-description")) : ("data-description")), array("style" => "width: 150px")), "popup-image-text");
        // line 835
        echo "

                        ";
        // line 838
        echo "                        ";
        $this->displayBlock('popupLinkedImageText', $context, $blocks);
        // line 862
        echo "
\t\t\t\t\t\t";
        // line 864
        echo "\t\t\t\t\t\t";
        $this->displayBlock('disableSourceImageForLi', $context, $blocks);
        // line 882
        echo "
                        ";
        // line 884
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide Popup Captions")), $_form_->getcheckbox("box[captions]", "on", ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "captions", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "captions");
        // line 891
        echo "

                        ";
        // line 893
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide long titles")), $_form_->getcheckbox("hideLongTooltipTitles", "on", ((($this->getAttribute($_settings_, "hideLongTooltipTitles", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "hide-long-tooltip-titles");
        // line 899
        echo "

                        ";
        // line 902
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), $_form_->gettext("box[background]", $this->getAttribute($this->getAttribute($_settings_, "box", array()), "background", array()), array("class" => "gg-color-picker")), "box-background");
        // line 909
        echo "
                        
                        ";
        // line 912
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")), $_form_->getselect("box[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "transparency", array()), 30)) : (30)), array("style" => "width: auto")), "box-transparency");
        // line 931
        echo "

                        ";
        // line 934
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow")), $_form_->getselect("box[slideshow]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshow", array()), "false")) : ("false")), array("style" => "width: auto")), "slideshow");
        // line 942
        echo "

                        ";
        // line 945
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow speed")), $_form_->getinput("number", "box[slideshowSpeed]", (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowSpeed", array()), 2500)) : (2500)), array("style" => array("width" => "auto")), "box-slideshowSpeed"));
        // line 953
        echo "

                        ";
        // line 956
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow pause on hover")), $_form_->getselect("box[popupHoverStop]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "popupHoverStop", array()), "false")) : ("false")), array("style" => "width: auto"), "box-popupHoverStop"), "popupHoverStop");
        // line 965
        echo "

                        ";
        // line 968
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow autostart")), $_form_->getselect("box[slideshowAuto]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowAuto", array()), "false")) : ("false")), array("style" => "width: auto"), "box-slideshowAuto"));
        // line 976
        echo "

                        ";
        // line 979
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image size")), ((($_form_->getinput("number", "box[popupwidth]", $this->getAttribute($this->getAttribute($_settings_, "box", array()), "popupwidth", array()), array("style" => array("width" => "60px"))) . $_form_->getspan("", "x")) . $_form_->getinput("number", "box[popupheight]", $this->getAttribute($this->getAttribute($_settings_, "box", array()), "popupheight", array()), array("style" => array("width" => "60px")))) . $_form_->getspan("", "pixels")), "box-popupsize");
        // line 995
        echo "


                        ";
        // line 999
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable browser history")), $_form_->getcheckbox("box[disableHistory]", "true", ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "disableHistory", array()) == "true")) ? (array("checked" => "checked")) : (array()))), "box-disableHistory");
        // line 1007
        echo "

                        ";
        // line 1010
        echo "                        ";
        $this->displayBlock('popupAfter', $context, $blocks);
        // line 1058
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 838
    public function block_popupLinkedImageText($context, array $blocks = array())
    {
        // line 839
        echo "                            <tr>
                                <th scope=\"row\">
                                    <label style=\"margin: 0 !important;\">
                                        ";
        // line 842
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Linked Image Text")), "html", null, true);
        echo "
                                        <br />
                                        <label><a href=\"";
        // line 844
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                    </label>
                                </th>
                                <td>
                                    ";
        // line 848
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getselect("box[linkedImageTextFree]", array("data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), "data-title", array("style" => "width: 150px", "disabled" => "", "id" => "ptsLinkTextChoose"));
        // line 858
        echo "
                                </td>
                            </tr>
                        ";
    }

    // line 864
    public function block_disableSourceImageForLi($context, array $blocks = array())
    {
        // line 865
        echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label style=\"margin: 0 !important;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 868
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable source image for Linked Images")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<label><a href=\"";
        // line 870
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
        // line 874
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getcheckbox("box[disableSourceImageForLiFree]", "1", array("disabled" => "disabled"));
        // line 878
        echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
    }

    // line 1010
    public function block_popupAfter($context, array $blocks = array())
    {
        // line 1011
        echo "                            ";
        // line 1012
        echo "                            ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video size")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.size", ((($_form_->gettext("popup[video][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array()), "853")) : ("853")), array("style" => array("width" => "40px"), "disabled" => "")) . $_form_->getspan("", "x")) . $_form_->gettext("popup[video][height]", (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array()), "480")) : ("480")), array("style" => array("width" => "40px"), "disabled" => ""))) . $_form_->getspan("", "pixels")));
        // line 1027
        echo "

                            ";
        // line 1030
        echo "                            ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Autoplay video")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.autoplay", $_form_->getselect("popup[video][autoplay]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array()), "false")) : ("false")), array("disabled" => "")));
        // line 1039
        echo "
                            
                            ";
        // line 1042
        echo "                            ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When video ends")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.onEnd", $_form_->getselect("popup[video][onEnd]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Do nothing")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open next slide")), "2" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Close popup"))), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array()), "0")) : ("0")), array("disabled" => "")));
        // line 1055
        echo "

                        ";
    }

    // line 1063
    public function block_preload($context, array $blocks = array())
    {
        // line 1064
        echo "                <table class=\"form-table\" name=\"preload\" id=\"gg-anl-preloader\">
                    <thead>
                        ";
        // line 1066
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["preloadEnabled"] = ((($this->getAttribute($this->getAttribute($_settings_, "preload", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "preload", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 1067
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["preloadEnabled"])) { $_preloadEnabled_ = $context["preloadEnabled"]; } else { $_preloadEnabled_ = null; }
        if (isset($context["f"])) { $_f_ = $context["f"]; } else { $_f_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Loader")), ((($_form_->getradio("preload[enabled]", "true", twig_array_merge(array("id" => "preload-enable"), (($_preloadEnabled_) ? (array("checked" => "checked")) : (array())))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "preload-enable")) . $_form_->getradio("preload[enabled]", "false", twig_array_merge(array("id" => "preload-disable"), (($_preloadEnabled_) ? (array()) : (array("checked" => "checked")))))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "preload-disable")), "preload", true);
        // line 1071
        echo "
                    </thead>
                ";
        // line 1073
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if ( !$this->getAttribute($_environment_, "isPro", array(), "method")) {
            // line 1074
            echo "                    <tbody>
                        <tr id=\"preload-background\">
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 1078
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 1080
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 1084
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $_form_->gettext("preload[background]", "#0073AA", array("class" => "gg-color-picker", "id" => "preloadColor-free"));
            echo "
                            </td>
                        </tr>
                        ";
            // line 1087
            $context["piconImg"] = ('' === $tmp = "                            <div class=\"gallery-loading\">
                                <div class=\"blocks\">
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                </div>
                            </div>
                        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 1097
            echo "
                        <tr>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 1101
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose Icon")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 1103
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 1107
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $_form_->getbutton("buttons-preload-icon", "Choose Icon", array("class" => "button button-primary", "id" => "choosePreicon-free"));
            echo "
                                ";
            // line 1108
            if (isset($context["piconImg"])) { $_piconImg_ = $context["piconImg"]; } else { $_piconImg_ = null; }
            echo twig_escape_filter($this->env, $_piconImg_, "html", null, true);
            echo "
                            </td>
                        </tr>
                    </tbody>
                ";
        }
        // line 1113
        echo "                </table>
            ";
    }

    // line 1117
    public function block_post($context, array $blocks = array())
    {
        // line 1118
        echo "            <div data-tab=\"post\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 1120
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Posts and Pages")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1123
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">Get
                        PRO for 29\$</a>
                </h1>

                <div>
                    <a href=\"";
        // line 1128
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1129
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/posts_pro.jpg\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1177
    public function block_captionSettingsType($context, array $blocks = array())
    {
        // line 1178
        echo "\t\t\t\t<table class=\"form-table captions-settings-type\" name=\"captionSettingsType\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 1180
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Use Caption Builder")), "utm_source=plugin&utm_medium=caption_settings_type&utm_campaign=gallery", "caption-settings-type-pro", $_form_->getselect("caption-settings-type-pro", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable"))), "0", array("disabled" => "disabled")));
        // line 1192
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
    }

    // line 1207
    public function block_overlaySettings($context, array $blocks = array())
    {
        // line 1208
        echo "\t\t\t\t\t\t<table class=\"form-table\" name=\"captions\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t";
        // line 1211
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["enableCaptions"])) { $_enableCaptions_ = $context["enableCaptions"]; } else { $_enableCaptions_ = null; }
        if (isset($context["f"])) { $_f_ = $context["f"]; } else { $_f_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), ((($_form_->getradio("thumbnail[overlay][enabled]", "true", twig_array_merge(array("id" => "showCaptions"), (($_enableCaptions_) ? (array("checked" => "checked")) : (array())))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "showCaptions")) . $_form_->getradio("thumbnail[overlay][enabled]", "false", twig_array_merge(array("id" => "hideCaptions"), (($_enableCaptions_) ? (array()) : (array("checked" => "checked")))))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "hideCaptions")), "", true, "useCaptions");
        // line 1231
        echo "

\t\t\t\t\t\t\t";
        // line 1234
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Effect")), $_form_->getbutton("", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), array("id" => "chooseEffect", "class" => "button bordered")), "chooseEffect");
        // line 1241
        echo "

\t\t\t\t\t\t\t";
        // line 1244
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('backgroundImageForHoverEffect', $context, $blocks);
        // line 1259
        echo "
\t\t\t\t\t\t\t";
        // line 1261
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('backgroundColorForShowOnHover', $context, $blocks);
        // line 1274
        echo "
\t\t\t\t\t\t\t";
        // line 1276
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Personal captions")), $_form_->getselect("thumbnail[overlay][personal]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array()), "false")) : ("false")), array("style" => "width: auto;")), "overlay-personal");
        // line 1284
        echo "

\t\t\t\t\t\t\t";
        // line 1287
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["polaroidIsEnable"])) { $_polaroidIsEnable_ = $context["polaroidIsEnable"]; } else { $_polaroidIsEnable_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Style")), $_form_->getselect("", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), $_polaroidIsEnable_, array("style" => "width: auto;", "class" => "polaroid-effect-class")), "polaroid-effect");
        // line 1295
        echo "

\t\t\t\t\t\t\t";
        // line 1298
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Animation")), $_form_->getselect("thumbnail[overlay][polaroidAnimation]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-animation");
        // line 1306
        echo "

\t\t\t\t\t\t\t";
        // line 1309
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Scattering ")), $_form_->getselect("thumbnail[overlay][polaroidScattering]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-scattering");
        // line 1317
        echo "

\t\t\t\t\t\t\t";
        // line 1320
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Frame Width")), $_form_->getinput("number", "thumbnail[overlay][polaroidFrameWidth]", (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array()), 20)) : (20)), array("style" => array("width" => "140px"))), "polaroid-frame-width", null, "polaroid-fram-width-row");
        // line 1330
        echo "

\t\t\t\t\t\t\t";
        // line 1333
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), $_form_->gettext("thumbnail[overlay][background]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "background", array()), array("class" => "gg-color-picker")), "overlay-background");
        // line 1340
        echo "

\t\t\t\t\t\t\t";
        // line 1343
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text color")), $_form_->gettext("thumbnail[overlay][foreground]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "foreground", array()), array("class" => "gg-color-picker")), "overlay-foreground");
        // line 1350
        echo "

\t\t\t\t\t\t\t";
        // line 1353
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")), $_form_->getselect("thumbnail[overlay][transparency]", array(0 => "0%", 1 => "10%", 2 => "20%", 3 => "30%", 4 => "40%", 5 => "50%", 6 => "60%", 7 => "70%", 8 => "80%", 9 => "90%", 10 => "100%"), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array()), 9)) : (9)), array("style" => "width: auto;")), "overlay-transparency");
        // line 1361
        echo "

\t\t\t\t\t\t\t";
        // line 1364
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text size")), ($_form_->getinput("number", "thumbnail[overlay][text_size]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), array("style" => array("width" => "140px"))) . $_form_->getselect("thumbnail[overlay][text_size_unit]", array(0 => "pixels", 1 => "percents", 2 => "ems"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array("style" => "margin-top: -2px; height: 27px"))), "text-size");
        // line 1378
        echo "

\t\t\t\t\t\t\t";
        // line 1381
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text horizontal align")), $_form_->getselect("thumbnail[overlay][text_align]", array("left" => "Left", "right" => "Right", "center" => "Center", "auto" => "Auto"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_align", array()), array("style" => "width: auto;")), "text-align");
        // line 1389
        echo "

\t\t\t\t\t\t\t";
        // line 1392
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text vertical align")), $_form_->getselect("thumbnail[overlay][position]", array("top" => "Top", "middle" => "Middle", "bottom" => "Bottom"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), array("style" => "width: auto;")), "overlay-position");
        // line 1400
        echo "

\t\t\t\t\t\t\t";
        // line 1403
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["fontList"])) { $_fontList_ = $context["fontList"]; } else { $_fontList_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Font family")), $_form_->getselectv("thumbnail[overlay][font_family]", $_fontList_, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "font_family", array()), array("style" => "width: auto;")), "font-family");
        // line 1411
        echo "


\t\t\t\t\t\t\t";
        // line 1415
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide image title tooltip")), $_form_->getselect("thumbnail[tooltip]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), $this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "tooltip", array()), array("style" => "width: auto;")), "tooltip");
        // line 1423
        echo "

\t\t\t\t\t\t\t";
        // line 1426
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mobile - show always caption")), $_form_->getselect("thumbnail[isMobile]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isMobile", array()), "false")) : ("false"))), "ismobile");
        // line 1433
        echo "

\t\t\t\t\t\t\t";
        // line 1436
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable captions on mobile")), $_form_->getselect("thumbnail[isDisableMobileCaption]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array()), "false")) : ("false"))), "isDisableMobileCaption");
        // line 1443
        echo "
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t</table>

\t\t\t\t\t\t<div class=\"separator\"></div>
\t\t\t\t\t";
    }

    // line 1244
    public function block_backgroundImageForHoverEffect($context, array $blocks = array())
    {
        // line 1245
        echo "\t\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image on hover")), "utm_source=plugin&utm_medium=hover_caption_image_bg&utm_campaign=gallery", "overlay-effect-image-on-hover-enable", $_form_->getselect("thumbnail[overlay][imageOnHoverEnable]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable"))), "0", array("disabled" => "disabled")));
        // line 1257
        echo "
\t\t\t\t\t\t\t";
    }

    // line 1261
    public function block_backgroundColorForShowOnHover($context, array $blocks = array())
    {
        // line 1262
        echo "\t\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color for \"Show on hover\"")), "utm_source=plugin&utm_medium=caption-show-on-hover&utm_campaign=gallery", "backgroundColorForShowOnHoverFree", $_form_->getselect("thumbnail[overlay][backgroundFoShowOnHover]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), 0, array("disabled" => "disabled")));
        // line 1272
        echo "
\t\t\t\t\t\t\t";
    }

    // line 1450
    public function block_icons($context, array $blocks = array())
    {
        // line 1451
        echo "\t\t\t\t\t\t<table class=\"form-table\" name=\"icons\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t";
        // line 1453
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["iconsEnabled"] = ((($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 1454
        echo "\t\t\t\t\t\t\t";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["iconsEnabled"])) { $_iconsEnabled_ = $context["iconsEnabled"]; } else { $_iconsEnabled_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show icons")), ((($_form_->getradio("icons[enabled]", "true", twig_array_merge(array("id" => "icons-enable"), (($_iconsEnabled_) ? (array("checked" => "checked")) : (array())))) . $_form_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "icons-enable")) . $_form_->getradio("icons[enabled]", "false", twig_array_merge(array("id" => "icons-disable"), (($_iconsEnabled_) ? (array()) : (array("checked" => "checked")))))) . $_form_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "icons-disable")), "photo-icon", true);
        // line 1459
        echo "
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 1462
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select effect")), $_form_->getbutton(null, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Animation")), array("class" => "button bordered", "id" => "selectIconsEffect")));
        // line 1464
        echo "
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1468
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsColor\" class=\"gg-color-picker\" value=\"";
        // line 1472
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "color", array()), "html", null, true);
        echo "\" name=\"icons[color]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsHoverColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1478
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons hover color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1482
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "hover_color", array()), "html", null, true);
        echo "\" name=\"icons[hover_color]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsBackgroundColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1488
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsBackgroundColor\" class=\"gg-color-picker\" value=\"";
        // line 1492
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background", array()), "html", null, true);
        echo "\" name=\"icons[background]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsBackgroundHoverColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1498
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background hover color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsBackgroundHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1502
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background_hover", array()), "html", null, true);
        echo "\" name=\"icons[background_hover]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsSize\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1508
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons size")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"number\" pattern=\"[0-9]\" id=\"iconsSize\"  name=\"icons[size]\" value=\"";
        // line 1512
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsMargin\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1518
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Distance between icons")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"number\" pattern=\"[0-9]\" id=\"iconsMargin\"  name=\"icons[margin]\" value=\"";
        // line 1522
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "margin", array()), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsOverlay\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1528
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show overlay")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select id=\"iconsOverlay\" name=\"icons[overlay_enabled]\" style=\"width: auto;\">
\t\t\t\t\t\t\t\t\t\t<option value=\"true\" ";
        // line 1533
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_enabled", array()), "true");
        echo ">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1534
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"false\" ";
        // line 1536
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_enabled", array()), "false");
        echo ">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1537
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"icons-overlay-toggle\">
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsOverlayColor\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1545
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay color")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"iconsOverlayColor\" class=\"gg-color-picker\" value=\"";
        // line 1549
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_color", array()), "html", null, true);
        echo "\" name=\"icons[overlay_color]\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr class=\"icons-overlay-toggle\">
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label for=\"iconsOverlayTransparency\">
\t\t\t\t\t\t\t\t\t\t";
        // line 1555
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay transparency")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select id=\"iconsOverlayTransparency\" name=\"icons[overlay_transparency]\" style=\"width: auto;\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 1560
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 0);
        echo ">0%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 1561
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 1);
        echo ">10%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 1562
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 2);
        echo ">20%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\" ";
        // line 1563
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 3);
        echo ">30%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"4\" ";
        // line 1564
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 4);
        echo ">40%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"5\" ";
        // line 1565
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 5);
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ( !$this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) {
            echo "selected=\"selected\"";
        }
        echo ">50%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"6\" ";
        // line 1566
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 6);
        echo ">60%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"7\" ";
        // line 1567
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 7);
        echo ">70%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"8\" ";
        // line 1568
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 8);
        echo ">80%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"9\" ";
        // line 1569
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 9);
        echo ">90%</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"10\" ";
        // line 1570
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 10);
        echo ">100%</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t";
    }

    // line 1579
    public function block_proCaptionAndIconSettings($context, array $blocks = array())
    {
        // line 1580
        echo "\t\t\t\t\t";
    }

    // line 1585
    public function block_categories($context, array $blocks = array())
    {
        // line 1586
        echo "            <div data-tab=\"cats\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 1588
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categorize images in the gallery")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1591
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                </h1>

                <div>
                    <a href=\"";
        // line 1595
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1596
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/cats_pro.jpg\" />
                    </a>
                </div>
                ";
        // line 1599
        $this->displayBlock('pagination', $context, $blocks);
        // line 1614
        echo "            </div>
        ";
    }

    // line 1599
    public function block_pagination($context, array $blocks = array())
    {
        // line 1600
        echo "                    <h1 style=\"line-height: 1;\">
                        ";
        // line 1601
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Let user switch gallery pages")), "html", null, true);
        echo "
                        </br>
                        <a class=\"button get-pro\"
                           href=\"";
        // line 1604
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                    </h1>
                    <div name=\"pagination\">
                        <div>
                            <a href=\"";
        // line 1608
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 1609
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/pagination_pro.jpg\" />
                            </a>
                        </div>
                    </div>
                ";
    }

    // line 1617
    public function block_watermark($context, array $blocks = array())
    {
        // line 1618
        echo "            <div data-tab=\"water-m-tab\">
                <h1 style=\"line-height: 1em;\">
                    ";
        // line 1620
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add watermarks to your photos")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1623
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO for 29\$</a>
                </h1>
                <div>
                    <a href=\"";
        // line 1626
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1627
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/water_m_pro.png\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1633
    public function block_form($context, array $blocks = array())
    {
        // line 1634
        echo "        ";
    }

    // line 1730
    public function block_captionEffectInPro($context, array $blocks = array())
    {
        // line 1731
        echo "\t\t\t\t\t\t<figure class=\"grid-gallery-caption available-in-pro\" data-grid-gallery-type=\"";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        echo twig_escape_filter($this->env, $_type_, "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
        // line 1732
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=caption-show-on-hover&utm_campaign=gallery")), "html", null, true);
        echo "\" class=\"caption-available-in-pro-link\">
\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
        // line 1733
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $_name_, "html", null, true);
        echo "\" class=\"dialog-image\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<figcaption style=\"";
        // line 1735
        if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
        echo twig_escape_filter($this->env, twig_trim_filter($_figcaptionStyle_), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<div class=\"grid-gallery-figcaption-wrap\" style=\"width:100%;height:100%;top:0;\">
\t\t\t\t\t\t\t\t\t<div style=\"display:table;width:100%;height:100%;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"display:table-cell;font-size:";
        // line 1738
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
        echo ";padding:10px;vertical-align:";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
        echo ";\">Caption</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t<div class=\"get-in-pro-element\">
\t\t\t\t\t\t\t\t";
        // line 1743
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pro Feature")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t";
    }

    // line 1790
    public function block_captionAndIconEffectsSign($context, array $blocks = array())
    {
        // line 1791
        echo "\t\t\t\t\t\t<h3>Captions effects with icons</h3>
\t\t\t\t\t";
    }

    // line 1793
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 1794
        echo "                        ";
        if (isset($context["iconsWithCaptionsEffects"])) { $_iconsWithCaptionsEffects_ = $context["iconsWithCaptionsEffects"]; } else { $_iconsWithCaptionsEffects_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_iconsWithCaptionsEffects_);
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 1795
            echo "                            <figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\">
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 1796
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" class=\"dialog-image\"/>
                                <figcaption style=\"";
            // line 1797
            if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
            echo twig_escape_filter($this->env, twig_trim_filter($_figcaptionStyle_), "html", null, true);
            echo "\">
                                    <div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
                                        <a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
                                        </a>
                                    </div>
                                </figcaption>
                                <div class=\"caption-with-";
            // line 1803
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\">
                                    <div style=\"display: table; height:100%; width:100%;\">
                                        <span style=\"padding: 10px;display:table-cell;font-size:";
            // line 1805
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo "
                                        vertical-align:";
            // line 1806
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";\">
                                            Caption
                                        </span>
                                    </div>
                                </div>
                                <div class=\"select-element\">
                                    ";
            // line 1812
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                                </div>
                            </figure>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1816
        echo "                    ";
    }

    // line 1961
    public function block_modals($context, array $blocks = array())
    {
        // line 1962
        echo "        <div id=\"iconsPreview\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select icons effects")), "html", null, true);
        echo "\">
            ";
        // line 1964
        $context["iconsEffects"] = array("hi-icon-effect-1a" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-1b" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-2a" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-2b" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-3a" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-3b" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-5a" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5b" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5c" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5d" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-7a" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-7b" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-9a" => array("padding" => "0", "bg" => "96a94b"), "hi-icon-effect-9b" => array("padding" => "0", "bg" => "96a94b"));
        // line 1981
        echo "            ";
        ob_start();
        // line 1982
        echo "                ";
        $this->displayBlock('icon_wrap_item_class', $context, $blocks);
        // line 1985
        echo "            ";
        $context["var_icon_wrap_item_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1986
        echo "            ";
        if (isset($context["iconsEffects"])) { $_iconsEffects_ = $context["iconsEffects"]; } else { $_iconsEffects_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_iconsEffects_);
        foreach ($context['_seq'] as $context["name"] => $context["p"]) {
            // line 1987
            echo "                <div class=\"hi-icon-wrap ";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["length"])) { $_length_ = $context["length"]; } else { $_length_ = null; }
            echo twig_escape_filter($this->env, twig_slice($this->env, $_name_, 0, ($_length_ - 1)), "html", null, true);
            echo " ";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo " holderjs\" style=\"display: inline-block; padding: ";
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_p_, "padding", array()), "html", null, true);
            echo "; width: 150px; height: 150px; background-color: #434A52; background-repeat: no-repeat; overflow: hidden;\">
                    <a href=\"#\" class=\"hi-icon ";
            // line 1988
            if (isset($context["var_icon_wrap_item_class"])) { $_var_icon_wrap_item_class_ = $context["var_icon_wrap_item_class"]; } else { $_var_icon_wrap_item_class_ = null; }
            echo twig_escape_filter($this->env, $_var_icon_wrap_item_class_, "html", null, true);
            echo "\" data-effect=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" title=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Click on the icon to select effect")) . " ") . $_name_), "html", null, true);
            echo "\" style=\"\">Select</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1991
        echo "        </div>
        <style>
            .hi-icon {
                color: ";
        // line 1994
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "color", array()), "html", null, true);
        echo " !important;
                background: ";
        // line 1995
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background", array()), "html", null, true);
        echo " !important;
            }
            .hi-icon:hover {
                color: ";
        // line 1998
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "hover_color", array()), "html", null, true);
        echo " !important;
                background: ";
        // line 1999
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background_hover", array()), "html", null, true);
        echo " !important;
            }
            .hi-icon {
                width: ";
        // line 2002
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
                height: ";
        // line 2003
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
            }
            .hi-icon:before {
                font-size: ";
        // line 2006
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
        echo "px !important;
                line-height: ";
        // line 2007
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
            }
        </style>
    ";
    }

    // line 1982
    public function block_icon_wrap_item_class($context, array $blocks = array())
    {
        // line 1983
        echo "\t\t\t\t\ticon-fullscreen
                ";
    }

    // line 2012
    public function block_settingsOtherPro($context, array $blocks = array())
    {
        // line 2013
        echo "\t";
    }

    // line 3
    public function getlabel($__label__ = null, $__for__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "for" => $__for__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    <label for=\"";
            if (isset($context["for"])) { $_for_ = $context["for"]; } else { $_for_ = null; }
            echo twig_escape_filter($this->env, $_for_, "html", null, true);
            echo "\">";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo twig_escape_filter($this->env, $_label_, "html", null, true);
            echo "</label>
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
        return "@galleries/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3345 => 4,  3332 => 3,  3328 => 2013,  3325 => 2012,  3320 => 1983,  3317 => 1982,  3308 => 2007,  3303 => 2006,  3296 => 2003,  3291 => 2002,  3284 => 1999,  3279 => 1998,  3272 => 1995,  3267 => 1994,  3262 => 1991,  3246 => 1988,  3233 => 1987,  3227 => 1986,  3224 => 1985,  3221 => 1982,  3218 => 1981,  3216 => 1964,  3211 => 1962,  3208 => 1961,  3204 => 1816,  3194 => 1812,  3184 => 1806,  3179 => 1805,  3173 => 1803,  3163 => 1797,  3158 => 1796,  3152 => 1795,  3146 => 1794,  3143 => 1793,  3138 => 1791,  3135 => 1790,  3127 => 1743,  3113 => 1738,  3106 => 1735,  3100 => 1733,  3096 => 1732,  3090 => 1731,  3087 => 1730,  3083 => 1634,  3080 => 1633,  3070 => 1627,  3066 => 1626,  3060 => 1623,  3054 => 1620,  3050 => 1618,  3047 => 1617,  3037 => 1609,  3033 => 1608,  3026 => 1604,  3020 => 1601,  3017 => 1600,  3014 => 1599,  3009 => 1614,  3007 => 1599,  3000 => 1596,  2996 => 1595,  2989 => 1591,  2983 => 1588,  2979 => 1586,  2976 => 1585,  2972 => 1580,  2969 => 1579,  2956 => 1570,  2950 => 1569,  2944 => 1568,  2938 => 1567,  2932 => 1566,  2922 => 1565,  2916 => 1564,  2910 => 1563,  2904 => 1562,  2898 => 1561,  2892 => 1560,  2884 => 1555,  2874 => 1549,  2867 => 1545,  2856 => 1537,  2850 => 1536,  2845 => 1534,  2839 => 1533,  2831 => 1528,  2821 => 1522,  2814 => 1518,  2804 => 1512,  2797 => 1508,  2787 => 1502,  2780 => 1498,  2770 => 1492,  2763 => 1488,  2753 => 1482,  2746 => 1478,  2736 => 1472,  2729 => 1468,  2723 => 1464,  2720 => 1462,  2715 => 1459,  2710 => 1454,  2707 => 1453,  2703 => 1451,  2700 => 1450,  2695 => 1272,  2691 => 1262,  2688 => 1261,  2683 => 1257,  2679 => 1245,  2676 => 1244,  2667 => 1443,  2662 => 1436,  2658 => 1433,  2653 => 1426,  2649 => 1423,  2644 => 1415,  2639 => 1411,  2633 => 1403,  2629 => 1400,  2624 => 1392,  2620 => 1389,  2615 => 1381,  2611 => 1378,  2606 => 1364,  2602 => 1361,  2597 => 1353,  2593 => 1350,  2588 => 1343,  2584 => 1340,  2579 => 1333,  2575 => 1330,  2570 => 1320,  2566 => 1317,  2561 => 1309,  2557 => 1306,  2552 => 1298,  2548 => 1295,  2543 => 1287,  2539 => 1284,  2534 => 1276,  2531 => 1274,  2528 => 1261,  2525 => 1259,  2522 => 1244,  2518 => 1241,  2514 => 1234,  2510 => 1231,  2504 => 1211,  2500 => 1208,  2497 => 1207,  2490 => 1192,  2487 => 1180,  2483 => 1178,  2480 => 1177,  2470 => 1129,  2466 => 1128,  2458 => 1123,  2452 => 1120,  2448 => 1118,  2445 => 1117,  2440 => 1113,  2431 => 1108,  2426 => 1107,  2419 => 1103,  2414 => 1101,  2408 => 1097,  2398 => 1087,  2391 => 1084,  2384 => 1080,  2379 => 1078,  2373 => 1074,  2370 => 1073,  2366 => 1071,  2360 => 1067,  2357 => 1066,  2353 => 1064,  2350 => 1063,  2344 => 1055,  2339 => 1042,  2335 => 1039,  2330 => 1030,  2326 => 1027,  2321 => 1012,  2319 => 1011,  2316 => 1010,  2309 => 878,  2306 => 874,  2299 => 870,  2294 => 868,  2289 => 865,  2286 => 864,  2279 => 858,  2276 => 848,  2269 => 844,  2264 => 842,  2259 => 839,  2256 => 838,  2249 => 1058,  2246 => 1010,  2242 => 1007,  2237 => 999,  2232 => 995,  2227 => 979,  2223 => 976,  2218 => 968,  2214 => 965,  2209 => 956,  2205 => 953,  2200 => 945,  2196 => 942,  2191 => 934,  2187 => 931,  2182 => 912,  2178 => 909,  2173 => 902,  2169 => 899,  2165 => 893,  2161 => 891,  2156 => 884,  2153 => 882,  2150 => 864,  2147 => 862,  2144 => 838,  2140 => 835,  2135 => 823,  2131 => 820,  2126 => 813,  2122 => 810,  2117 => 795,  2112 => 791,  2106 => 772,  2102 => 771,  2098 => 768,  2095 => 767,  2087 => 761,  2083 => 760,  2079 => 758,  2075 => 757,  2071 => 755,  2067 => 754,  2063 => 752,  2059 => 751,  2055 => 749,  2051 => 748,  2042 => 742,  2035 => 741,  2030 => 739,  2023 => 738,  2018 => 736,  2011 => 735,  2003 => 731,  1999 => 730,  1989 => 723,  1982 => 719,  1972 => 712,  1965 => 711,  1961 => 710,  1954 => 709,  1947 => 705,  1940 => 700,  1937 => 699,  1929 => 693,  1925 => 691,  1921 => 689,  1917 => 688,  1913 => 686,  1908 => 684,  1905 => 683,  1902 => 667,  1900 => 656,  1896 => 654,  1893 => 653,  1889 => 647,  1886 => 646,  1879 => 648,  1877 => 646,  1873 => 644,  1869 => 628,  1865 => 626,  1861 => 625,  1856 => 622,  1850 => 618,  1847 => 617,  1843 => 615,  1840 => 614,  1833 => 585,  1825 => 580,  1821 => 579,  1817 => 578,  1812 => 576,  1808 => 574,  1805 => 573,  1798 => 569,  1794 => 568,  1788 => 565,  1784 => 563,  1779 => 560,  1775 => 551,  1771 => 549,  1767 => 540,  1763 => 538,  1759 => 528,  1755 => 526,  1750 => 525,  1747 => 524,  1743 => 522,  1740 => 521,  1736 => 519,  1732 => 510,  1728 => 508,  1724 => 499,  1720 => 497,  1716 => 487,  1712 => 485,  1707 => 484,  1704 => 483,  1700 => 481,  1697 => 480,  1693 => 478,  1689 => 469,  1685 => 467,  1681 => 466,  1677 => 464,  1673 => 459,  1669 => 457,  1665 => 456,  1662 => 455,  1657 => 452,  1652 => 448,  1648 => 446,  1645 => 445,  1641 => 443,  1638 => 442,  1634 => 436,  1631 => 435,  1626 => 432,  1622 => 426,  1619 => 425,  1614 => 422,  1610 => 417,  1607 => 416,  1602 => 304,  1597 => 296,  1594 => 295,  1591 => 288,  1588 => 287,  1581 => 437,  1579 => 435,  1576 => 434,  1574 => 425,  1571 => 424,  1569 => 416,  1565 => 414,  1561 => 405,  1557 => 403,  1551 => 396,  1548 => 384,  1544 => 381,  1540 => 379,  1536 => 377,  1532 => 375,  1527 => 372,  1523 => 370,  1520 => 369,  1516 => 362,  1512 => 361,  1508 => 359,  1503 => 352,  1499 => 349,  1495 => 347,  1491 => 345,  1487 => 343,  1482 => 340,  1477 => 339,  1473 => 337,  1469 => 335,  1466 => 334,  1462 => 330,  1458 => 321,  1450 => 317,  1440 => 311,  1436 => 310,  1430 => 306,  1428 => 287,  1424 => 285,  1421 => 284,  1416 => 281,  1412 => 2012,  1409 => 2011,  1407 => 1961,  1397 => 1954,  1392 => 1952,  1385 => 1949,  1381 => 1948,  1377 => 1947,  1369 => 1944,  1364 => 1943,  1362 => 1942,  1355 => 1938,  1348 => 1934,  1323 => 1911,  1313 => 1907,  1306 => 1904,  1292 => 1903,  1278 => 1902,  1275 => 1901,  1270 => 1900,  1266 => 1898,  1264 => 1826,  1258 => 1823,  1253 => 1821,  1247 => 1817,  1244 => 1793,  1242 => 1790,  1238 => 1789,  1235 => 1788,  1221 => 1787,  1214 => 1783,  1200 => 1778,  1193 => 1775,  1188 => 1774,  1182 => 1773,  1175 => 1769,  1165 => 1763,  1159 => 1761,  1153 => 1759,  1137 => 1748,  1134 => 1747,  1131 => 1730,  1124 => 1726,  1117 => 1723,  1104 => 1715,  1100 => 1714,  1082 => 1713,  1077 => 1711,  1071 => 1707,  1060 => 1703,  1054 => 1700,  1048 => 1698,  1039 => 1697,  1031 => 1696,  1022 => 1695,  1017 => 1694,  1014 => 1693,  1011 => 1692,  1007 => 1691,  1004 => 1690,  1001 => 1689,  999 => 1680,  993 => 1677,  988 => 1675,  980 => 1670,  973 => 1666,  963 => 1659,  958 => 1657,  951 => 1654,  945 => 1652,  940 => 1650,  932 => 1646,  927 => 1645,  920 => 1641,  914 => 1638,  908 => 1636,  905 => 1635,  903 => 1633,  900 => 1632,  898 => 1617,  895 => 1616,  893 => 1585,  887 => 1581,  885 => 1579,  881 => 1577,  879 => 1450,  876 => 1449,  874 => 1207,  868 => 1203,  864 => 1201,  861 => 1200,  856 => 1196,  854 => 1177,  851 => 1176,  847 => 1175,  843 => 1174,  840 => 1167,  837 => 1137,  833 => 1134,  831 => 1117,  827 => 1115,  825 => 1063,  822 => 1062,  820 => 767,  817 => 766,  815 => 699,  812 => 698,  810 => 653,  807 => 652,  805 => 614,  797 => 608,  794 => 607,  781 => 598,  777 => 597,  768 => 594,  763 => 592,  758 => 589,  756 => 445,  753 => 444,  751 => 442,  748 => 441,  746 => 284,  742 => 282,  740 => 281,  734 => 280,  729 => 279,  724 => 278,  719 => 277,  714 => 276,  706 => 275,  702 => 274,  697 => 272,  693 => 271,  689 => 270,  685 => 269,  681 => 268,  677 => 267,  673 => 266,  669 => 265,  665 => 264,  661 => 263,  657 => 261,  654 => 260,  651 => 259,  648 => 258,  640 => 175,  637 => 174,  632 => 159,  628 => 157,  621 => 155,  617 => 154,  613 => 152,  606 => 150,  603 => 149,  585 => 146,  582 => 145,  578 => 121,  574 => 119,  571 => 118,  568 => 117,  565 => 116,  558 => 253,  555 => 245,  551 => 244,  545 => 241,  541 => 240,  537 => 239,  533 => 238,  529 => 237,  525 => 236,  520 => 235,  515 => 234,  511 => 233,  507 => 232,  503 => 231,  499 => 229,  492 => 226,  488 => 225,  483 => 224,  479 => 223,  476 => 222,  469 => 218,  462 => 217,  457 => 215,  450 => 214,  444 => 213,  441 => 212,  437 => 211,  430 => 207,  423 => 205,  419 => 204,  413 => 201,  406 => 199,  392 => 191,  382 => 190,  376 => 186,  369 => 182,  365 => 180,  360 => 177,  357 => 174,  355 => 173,  353 => 172,  351 => 171,  338 => 163,  336 => 162,  333 => 161,  331 => 145,  328 => 144,  325 => 143,  322 => 142,  319 => 141,  315 => 140,  312 => 139,  309 => 138,  306 => 137,  303 => 136,  300 => 135,  297 => 134,  294 => 133,  291 => 132,  288 => 131,  284 => 130,  281 => 129,  278 => 128,  275 => 127,  271 => 126,  268 => 125,  265 => 124,  263 => 123,  260 => 122,  258 => 116,  251 => 111,  244 => 109,  241 => 108,  238 => 107,  235 => 106,  227 => 101,  217 => 94,  210 => 92,  201 => 86,  195 => 84,  191 => 83,  188 => 82,  182 => 71,  179 => 70,  176 => 69,  173 => 68,  166 => 66,  161 => 65,  157 => 64,  154 => 63,  149 => 59,  144 => 60,  142 => 59,  137 => 57,  129 => 52,  121 => 47,  113 => 42,  105 => 37,  91 => 31,  83 => 29,  74 => 27,  71 => 8,  68 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/settings.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/settings.twig");
    }
}
