<?php

/* @galleries/shortcode/gallery.twig */
class __TwigTemplate_b0a031f238f9414bfc6903e283ea210566cb50ae40dd18435317bfc5e660357b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'gallery_before' => array($this, 'block_gallery_before'),
            'gallery_attributes' => array($this, 'block_gallery_attributes'),
            'additionalGridGalleryClass' => array($this, 'block_additionalGridGalleryClass'),
            'photos_before' => array($this, 'block_photos_before'),
            'photos_attributes' => array($this, 'block_photos_attributes'),
            'photos' => array($this, 'block_photos'),
            'photos_after' => array($this, 'block_photos_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["style"] = $this->loadTemplate("@galleries/shortcode/style.twig", "@galleries/shortcode/gallery.twig", 1);
        // line 2
        echo "
";
        // line 3
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        if ((array_key_exists("gallery", $context) &&  !twig_test_empty($_gallery_))) {
            // line 4
            echo "\t";
            $this->displayBlock('gallery_before', $context, $blocks);
            // line 14
            echo "
\t<div
\t\t";
            // line 16
            $this->displayBlock('gallery_attributes', $context, $blocks);
            // line 190
            echo ">

\t\t";
            // line 192
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ((($this->getAttribute($this->getAttribute($_settings_, "preload", array()), "enabled", array()) == "true") || ($this->getAttribute($this->getAttribute($_settings_, "preload", array()), "enabled", array()) == null))) {
                // line 193
                echo "\t\t\t";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
                if (((($this->getAttribute($this->getAttribute($_settings_, "preload", array()), "icon_name", array()) == "default") || ($this->getAttribute($_environment_, "isPro", array(), "method") != true)) || ($this->getAttribute($this->getAttribute($_settings_, "preload", array()), "enabled", array()) == null))) {
                    // line 194
                    echo "\t\t\t\t<div class=\"gallery-loading\">
\t\t\t\t\t<div class=\"blocks\">
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 203
                    echo "\t\t\t\t<div class=\"gallery-loading\">
\t\t\t\t\t<div class=\"la-";
                    // line 204
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "preload", array()), "icon_name", array()), "html", null, true);
                    echo "\" style=\"color: ";
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "preload", array()), "background", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 205
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute($_settings_, "preload", array()), "icon_items", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 206
                        echo "\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 208
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                }
                // line 211
                echo "\t\t";
            }
            // line 212
            echo "
\t\t";
            // line 213
            $this->displayBlock('photos_before', $context, $blocks);
            // line 215
            echo "
\t\t";
            // line 216
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "enabled", array())) {
                // line 217
                echo "            <div id=\"social-share-html\" style=\"display:none;\">
                ";
                // line 218
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "html", array());
                echo "
                ";
                // line 220
                echo "            </div>
        ";
            }
            // line 222
            echo "
        <div id=\"gallery-sharing-top\"></div>
\t\t<div
\t\t\t";
            // line 225
            $this->displayBlock('photos_attributes', $context, $blocks);
            // line 228
            echo ">

\t\t\t";
            // line 230
            $this->displayBlock('photos', $context, $blocks);
            // line 237
            echo "
\t\t\t<div class=\"grid-gallery-clearfix\"></div>
\t\t</div>
        <div id=\"gallery-sharing-bottom\"></div>

\t\t<div class=\"grid-gallery-clearfix\"></div>

\t\t";
            // line 244
            $this->displayBlock('photos_after', $context, $blocks);
            // line 246
            echo "\t</div>
\t
\t<!-- Gallery by Supsystic plugin ";
            // line 248
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "getConfig", array(), "method"), "get", array(0 => "plugin_version"), "method"), "html", null, true);
            echo "  ";
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (($this->getAttribute($_environment_, "isPro", array(), "method") == true)) {
                echo " / ";
                if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "getConfig", array(), "method"), "get", array(0 => "pro_plugin_version"), "method"), "html", null, true);
            }
            echo " -->
";
        }
    }

    // line 4
    public function block_gallery_before($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true"))) {
            // line 6
            echo "\t\t\t<style>
\t\t\t\t #grid-gallery-";
            // line 7
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
            echo " .";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "effect", array()), "html", null, true);
            echo " .hi-icon { color: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "color", array()), "html", null, true);
            echo " !important; background: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background", array()), "html", null, true);
            echo " !important; }
\t\t\t\t #grid-gallery-";
            // line 8
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
            echo " .";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "effect", array()), "html", null, true);
            echo " .hi-icon:hover { color: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "hover_color", array()), "html", null, true);
            echo " !important; background: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background_hover", array()), "html", null, true);
            echo " !important; }
\t\t\t\t #grid-gallery-";
            // line 9
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
            echo " .hi-icon { width: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
            echo "px !important; height: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
            echo "px !important; }
\t\t\t\t #grid-gallery-";
            // line 10
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
            echo " .hi-icon:before { font-size: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
            echo "px !important; line-height: ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
            echo "px !important; }
\t\t\t</style>
\t\t";
        }
        // line 13
        echo "\t";
    }

    // line 16
    public function block_gallery_attributes($context, array $blocks = array())
    {
        // line 17
        echo "\t\t\tid=\"grid-gallery-";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
        echo "\"
\t\t\tdata-title=\"";
        // line 18
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "title", array()), "html", null, true);
        echo "\"
\t\t\tdata-grid-type=\"";
        // line 19
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()), "html", null, true);
        echo "\"
\t\t\tdata-offset=\"";
        // line 20
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "distance", array()), "html", null, true);
        echo "\"
\t\t\tdata-area-position=\"";
        // line 21
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "position", array()), "html", null, true);
        echo "\"
\t\t\tdata-icons=\"";
        // line 22
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()), "html", null, true);
        echo "\"
\t\t\tdata-preloader = \"";
        // line 23
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "preload", array()), "enabled", array()), "html", null, true);
        echo "\"
\t\t\t";
        // line 24
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "2")) {
            // line 25
            echo " \t\t\t\tdata-width=\"auto\"
 \t\t\t";
        } else {
            // line 27
            echo " \t\t\t\tdata-width=\"";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array()), "html", null, true);
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()) == 1)) {
                echo "%";
            }
            echo "\"
 \t\t\t";
        }
        // line 29
        echo "\t\t\tdata-height=\"";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array()), "html", null, true);
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()) == 1)) {
            echo "%";
        }
        echo "\"
\t\t\tdata-padding=\"";
        // line 30
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "area", array()), "padding", array()), "html", null, true);
        echo "\"
\t\t\tdata-quicksand = \"";
        // line 31
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "quicksand", array()), "enabled", array()) == "1")) {
            echo "enabled";
        } else {
            echo "disabled";
        }
        echo "\"
\t\t\tdata-quicksand-duration = \"";
        // line 32
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($_settings_, "quicksand", array()), "duration", array()))) {
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "quicksand", array()), "duration", array()), "html", null, true);
        } else {
            echo "none";
        }
        echo "\"
\t\t\t\t";
        // line 33
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "box", array()), "enabled", array()) == "false"))) {
            // line 34
            echo "\t\t\t\t\tdata-popup-type = \"disable\"
\t\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t\tdata-popup-theme = ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "box", array()), "theme", array()), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "0") && ($_mobile_ != "true"))) {
            // line 39
            echo "\t\t\t\t\tdata-popup-type =\"colorbox\"
\t\t\t\t\tdata-popup-fadeOut = \"";
            // line 40
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "fadeOut", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "fadeOut", array()), 300)) : (300)), "html", null, true);
            echo "\"
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if (((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "1") && ($_mobile_ != "true")) && ((($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true"))) {
            // line 43
            echo "\t\t\t\t\tdata-popup-type = \"pretty-photo\"
\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["mobile"])) { $_mobile_ = $context["mobile"]; } else { $_mobile_ = null; }
        if (((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()) == "2") && ($_mobile_ != "true")) && ((($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true"))) {
            // line 46
            echo "\t\t\t\t\tdata-popup-type = \"photobox\"
\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "3")) {
            // line 49
            echo "\t\t\t\t\tdata-columns-number = ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array()), "columns", array()), "number", array()), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "box", array()), "captions", array()) == "on")) {
            // line 52
            echo "\t\t\t\t\tdata-popup-captions = 'hide'
\t\t\t\t";
        }
        // line 54
        echo "
\t\t\t\tdata-popup-image-text = \"";
        // line 55
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "imageText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "imageText", array()), "title")) : ("title")), "html", null, true);
        echo "\"

\t\t\t\t";
        // line 57
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "box", array()), "popupwidth", array()) == "")) {
            echo " 
\t\t\t\t\tdata-popup-widthsize = \"auto\" 
\t\t\t\t";
        } else {
            // line 59
            echo " 
\t\t\t\t\tdata-popup-widthsize = \"";
            // line 60
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "box", array()), "popupwidth", array()), "html", null, true);
            echo "\" 
\t\t\t\t";
        }
        // line 62
        echo "
\t\t\t\t";
        // line 63
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "box", array()), "popupheight", array()) == "")) {
            echo " 
\t\t\t\t\tdata-popup-heightsize = \"auto\" 
\t\t\t\t";
        } else {
            // line 65
            echo " 
\t\t\t\t\tdata-popup-heightsize = \"";
            // line 66
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "box", array()), "popupheight", array()), "html", null, true);
            echo "\" 
\t\t\t\t";
        }
        // line 68
        echo "
\t\t\t";
        // line 69
        $context["popup_i18n_words"] = array("close" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("close")), "next" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("next")), "previous" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("previous")), "start_slideshow" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("start slideshow")), "stop_slideshow" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("stop slideshow")), "image" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("image")), "of" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")));
        // line 70
        echo "\t\t\tdata-popup-i18n-words = \"";
        if (isset($context["popup_i18n_words"])) { $_popup_i18n_words_ = $context["popup_i18n_words"]; } else { $_popup_i18n_words_ = null; }
        echo twig_escape_filter($this->env, twig_jsonencode_filter($_popup_i18n_words_));
        echo "\"

            data-popup-slideshow = \"";
        // line 72
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshow", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-slideshow-speed = \"";
        // line 73
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowSpeed", array()), 2500)) : (2500)), "html", null, true);
        echo "\"
\t\t\tdata-popup-hoverstop = \"";
        // line 74
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "popupHoverStop", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-slideshow-auto = \"";
        // line 75
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowAuto", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-background = \"";
        // line 76
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "box", array()), "background", array()), "html", null, true);
        echo "\"
\t\t\tdata-popup-transparency = \"";
        // line 77
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "transparency", array()), 30)) : (30)), "html", null, true);
        echo "\"
\t\t\tdata-popup-disable-history=\"";
        // line 78
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "box", array()), "disableHistory", array()), "html", null, true);
        echo "\"
\t\t\tdata-fullscreen=\"";
        // line 79
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo (($this->getAttribute($_settings_, "fullscreen", array())) ? ("true") : ("false"));
        echo "\"
\t\t\tdata-hide-tooltip=\"";
        // line 80
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "tooltip", array()), "html", null, true);
        echo "\"
\t\t\tdata-caption-font-family=\"";
        // line 81
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
        echo "\"
\t\t\tdata-caption-text-size=\"";
        // line 82
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
        echo "\"
\t\t\tdata-is-mobile=\"";
        // line 83
        if (isset($context["isMobile"])) { $_isMobile_ = $context["isMobile"]; } else { $_isMobile_ = null; }
        echo twig_escape_filter($this->env, ((array_key_exists("isMobile", $context)) ? (_twig_default_filter($_isMobile_, "0")) : ("0")), "html", null, true);
        echo "\"
\t\t\tdata-caption-mobile=\"";
        // line 84
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isMobile", array()), "false")) : ("false")), "html", null, true);
        echo "\" ";
        // line 85
        echo "\t\t\tdata-hide-long-tltp-title=\"";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo ((($this->getAttribute($_settings_, "hideLongTooltipTitles", array()) == "on")) ? ("1") : ("0"));
        echo "\"
\t\t\tdata-caption-disabled-on-mobile=\"";
        // line 86
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\t";
        // line 87
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()) == "polaroid")) {
            // line 88
            echo "\t\t\t\tdata-polaroid-animation=\"";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array()), "true")) : ("true")), "html", null, true);
            echo "\"
\t\t\t\tdata-polaroid-scattering=\"";
            // line 89
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array()), "true")) : ("true")), "html", null, true);
            echo "\"
\t\t\t\tdata-polaroid-frame-width=\"";
            // line 90
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array()), 20)) : (20)), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 92
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "3")) {
            // line 93
            echo "\t\t\t\tdata-responsive-colums=\"";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array()), "")) : (""))));
            echo "\"
\t\t\t";
        }
        // line 95
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "horizontalScroll", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array()), "enabled", array()) == "true"))) {
            // line 96
            echo "\t\t\t\tdata-horizontal-scroll=\"";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($_settings_, "horizontalScroll", array())));
            echo "\"
\t\t\t";
        }
        // line 98
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
            // line 99
            echo "\t\t\t\tdata-thumb-overlay-personal=\"1\"
\t\t\t";
        }
        // line 101
        echo "
            ";
        // line 102
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["imageSharingButPos"] = $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array());
        // line 103
        echo "            ";
        if (isset($context["imageSharingButPos"])) { $_imageSharingButPos_ = $context["imageSharingButPos"]; } else { $_imageSharingButPos_ = null; }
        $context["imageSharingWrapperClass"] = ($_imageSharingButPos_ . " ");
        // line 104
        echo "            ";
        if (isset($context["imageSharingButPos"])) { $_imageSharingButPos_ = $context["imageSharingButPos"]; } else { $_imageSharingButPos_ = null; }
        if ((($_imageSharingButPos_ == "top") || ($_imageSharingButPos_ == "bottom"))) {
            // line 105
            echo "                ";
            if (isset($context["imageSharingWrapperClass"])) { $_imageSharingWrapperClass_ = $context["imageSharingWrapperClass"]; } else { $_imageSharingWrapperClass_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            $context["imageSharingWrapperClass"] = ($_imageSharingWrapperClass_ . $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()));
            // line 106
            echo "            ";
        } else {
            // line 107
            echo "                    ";
            if (isset($context["imageSharingWrapperClass"])) { $_imageSharingWrapperClass_ = $context["imageSharingWrapperClass"]; } else { $_imageSharingWrapperClass_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            $context["imageSharingWrapperClass"] = (($_imageSharingWrapperClass_ . "vertical ") . $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array()));
            // line 109
            echo "            ";
        }
        // line 110
        echo "
            ";
        // line 121
        echo "
            ";
        // line 122
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["socialSharing"] = array("enabled" => $this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "enabled", array()), "gallerySharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "gallerySharing", array()), "enabled", array()), "position" => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array())), "imageSharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "enabled", array()), "wrapperClass" => $this->getAttribute(        // line 130
$this, "getSocialSharingWrapperClass", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array())), "method")), "popupSharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "enabled", array()), "wrapperClass" => $this->getAttribute(        // line 138
$this, "getSocialSharingWrapperClass", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "buttonsPosition", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignHorizontal", array()), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignVertical", array())), "method")));
        // line 147
        echo "\t\t\tdata-social-sharing = \"";
        if (isset($context["socialSharing"])) { $_socialSharing_ = $context["socialSharing"]; } else { $_socialSharing_ = null; }
        echo twig_escape_filter($this->env, twig_jsonencode_filter($_socialSharing_));
        echo "\"
\t\t\t";
        // line 148
        ob_start();
        // line 149
        echo "\t\t\t\t";
        $this->displayBlock('additionalGridGalleryClass', $context, $blocks);
        // line 156
        echo "\t\t\t";
        $context["varAdditionalGalleryClass"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 157
        echo "\t\t\tclass=\"grid-gallery
\t\t\t\t";
        // line 158
        if (isset($context["varAdditionalGalleryClass"])) { $_varAdditionalGalleryClass_ = $context["varAdditionalGalleryClass"]; } else { $_varAdditionalGalleryClass_ = null; }
        echo twig_escape_filter($this->env, $_varAdditionalGalleryClass_, "html", null, true);
        echo "
\t\t\t\t";
        // line 159
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "thumbs", array()), "enable", array()) == "1")) {
            // line 160
            echo "\t\t\t\t\tgrid-gallery-thumbs
\t\t\t\t";
        }
        // line 162
        echo "
\t\t\t\t";
        // line 163
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if ((($this->getAttribute($this->getAttribute($_environment_, "getConfig", array(), "method"), "get", array(0 => "optimizations"), "method") == 1) && ($this->getAttribute($_environment_, "isPro", array(), "method") == false))) {
            // line 164
            echo "\t\t\t\t\t\toptimizations
\t\t\t\t";
        }
        // line 166
        echo "
\t\t\t\t";
        // line 167
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "openByLink", array()) == "on")) {
            // line 168
            echo "\t\t\t\t    hidden-item
                ";
        }
        // line 170
        echo "
\t\t\t\t";
        // line 171
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "displayFirstPhoto", array()) == "on")) {
            // line 172
            echo "\t\t\t\t    one-photo
                ";
        }
        // line 174
        echo "                \"
\t\t\tstyle=\"
\t\t\t\twidth:";
        // line 176
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($_settings_, "area", array()), "width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t\t\t\theight:";
        // line 177
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "height", array()), "auto")) : ("auto")), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 178
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "height", array()) != "auto") && ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "height", array()) != null))) {
            echo "px ";
        }
        echo ";
\t\t\t\t";
        // line 179
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "position", array()) == "1") || ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "position", array()) == "left"))) {
            // line 180
            echo "\t\t\t\t\tfloat: left;
\t\t\t\t";
        }
        // line 182
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "position", array()) == "2") || ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "position", array()) == "right"))) {
            // line 183
            echo "\t\t\t\t\tfloat:right;
\t\t\t\t";
        }
        // line 185
        echo "\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "position", array()) == "center")) {
            // line 186
            echo "\t\t\t\tmargin-left:auto;
\t\t\t\tmargin-right:auto;
\t\t\t\t";
        }
        // line 189
        echo "\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($this->getAttribute($_settings_, "fullscreen", array()), "enabled", array())) {
            echo "position: fixed; z-index: 9999999; top: 0; left: 0; background-color: white;";
        } else {
            echo "position:relative;";
        }
        echo "\"
\t\t";
    }

    // line 149
    public function block_additionalGridGalleryClass($context, array $blocks = array())
    {
        // line 150
        echo "\t\t\t\t\t";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "1")) {
            // line 151
            echo "\t\t\t\t\t\tgrid-gallery-fluid-height
\t\t\t\t\t";
        } else {
            // line 153
            echo "\t\t\t\t\t\tgrid-gallery-fixed
\t\t\t\t\t";
        }
        // line 155
        echo "\t\t\t\t";
    }

    // line 213
    public function block_photos_before($context, array $blocks = array())
    {
        // line 214
        echo "\t\t";
    }

    // line 225
    public function block_photos_attributes($context, array $blocks = array())
    {
        // line 226
        echo "\t\t\t\tid=\"photos-";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
        echo "\"
\t\t\t\tclass=\"grid-gallery-photos\"
\t\t\t";
    }

    // line 230
    public function block_photos($context, array $blocks = array())
    {
        // line 231
        echo "\t\t\t    ";
        $context["i"] = 0;
        // line 232
        echo "\t\t\t\t";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gallery_, "photos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 233
            echo "\t\t\t\t\t";
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if (isset($context["photo"])) { $_photo_ = $context["photo"]; } else { $_photo_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $this->loadTemplate("@galleries/shortcode/helpers.twig", "@galleries/shortcode/gallery.twig", 233)->display(array("gallery" => $_gallery_, "photo" => $_photo_, "settings" => $_settings_, "index" => $_i_));
            // line 234
            echo "\t\t\t\t    ";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["i"] = ($_i_ + 1);
            // line 235
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "\t\t\t";
    }

    // line 244
    public function block_photos_after($context, array $blocks = array())
    {
        // line 245
        echo "\t\t";
    }

    // line 111
    public function getgetSocialSharingWrapperClass($__position__ = null, $__horizontalAlign__ = null, $__verticalAlign__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "position" => $__position__,
            "horizontalAlign" => $__horizontalAlign__,
            "verticalAlign" => $__verticalAlign__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 112
            echo "                ";
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            $context["class"] = ($_position_ . " ");
            // line 113
            echo "                ";
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            if ((($_position_ == "top") || ($_position_ == "bottom"))) {
                // line 114
                echo "                    ";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                if (isset($context["horizontalAlign"])) { $_horizontalAlign_ = $context["horizontalAlign"]; } else { $_horizontalAlign_ = null; }
                $context["class"] = ($_class_ . $_horizontalAlign_);
                // line 115
                echo "                ";
            } else {
                // line 116
                echo "                        ";
                if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                if (isset($context["verticalAlign"])) { $_verticalAlign_ = $context["verticalAlign"]; } else { $_verticalAlign_ = null; }
                $context["class"] = (($_class_ . "vertical ") . $_verticalAlign_);
                // line 118
                echo "                ";
            }
            // line 119
            echo "                ";
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
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
        return "@galleries/shortcode/gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  841 => 119,  838 => 118,  833 => 116,  830 => 115,  825 => 114,  821 => 113,  817 => 112,  803 => 111,  799 => 245,  796 => 244,  792 => 236,  786 => 235,  782 => 234,  775 => 233,  769 => 232,  766 => 231,  763 => 230,  754 => 226,  751 => 225,  747 => 214,  744 => 213,  740 => 155,  736 => 153,  732 => 151,  728 => 150,  725 => 149,  713 => 189,  708 => 186,  704 => 185,  700 => 183,  696 => 182,  692 => 180,  689 => 179,  682 => 178,  677 => 177,  672 => 176,  668 => 174,  664 => 172,  661 => 171,  658 => 170,  654 => 168,  651 => 167,  648 => 166,  644 => 164,  641 => 163,  638 => 162,  634 => 160,  631 => 159,  626 => 158,  623 => 157,  620 => 156,  617 => 149,  615 => 148,  609 => 147,  607 => 138,  606 => 130,  604 => 122,  601 => 121,  598 => 110,  595 => 109,  590 => 107,  587 => 106,  582 => 105,  578 => 104,  574 => 103,  571 => 102,  568 => 101,  564 => 99,  560 => 98,  553 => 96,  549 => 95,  542 => 93,  538 => 92,  532 => 90,  527 => 89,  521 => 88,  518 => 87,  513 => 86,  507 => 85,  503 => 84,  498 => 83,  491 => 82,  486 => 81,  481 => 80,  476 => 79,  471 => 78,  466 => 77,  461 => 76,  456 => 75,  451 => 74,  446 => 73,  441 => 72,  434 => 70,  432 => 69,  429 => 68,  423 => 66,  420 => 65,  413 => 63,  410 => 62,  404 => 60,  401 => 59,  394 => 57,  388 => 55,  385 => 54,  381 => 52,  377 => 51,  370 => 49,  366 => 48,  362 => 46,  357 => 45,  353 => 43,  348 => 42,  342 => 40,  339 => 39,  334 => 38,  327 => 36,  323 => 34,  320 => 33,  310 => 32,  301 => 31,  296 => 30,  286 => 29,  275 => 27,  271 => 25,  268 => 24,  263 => 23,  258 => 22,  253 => 21,  248 => 20,  243 => 19,  238 => 18,  232 => 17,  229 => 16,  225 => 13,  212 => 10,  201 => 9,  187 => 8,  173 => 7,  170 => 6,  166 => 5,  163 => 4,  148 => 248,  144 => 246,  142 => 244,  133 => 237,  131 => 230,  127 => 228,  125 => 225,  120 => 222,  116 => 220,  111 => 218,  108 => 217,  105 => 216,  102 => 215,  100 => 213,  97 => 212,  94 => 211,  89 => 208,  82 => 206,  77 => 205,  69 => 204,  66 => 203,  55 => 194,  50 => 193,  47 => 192,  43 => 190,  41 => 16,  37 => 14,  34 => 4,  31 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/gallery.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/shortcode/gallery.twig");
    }
}
