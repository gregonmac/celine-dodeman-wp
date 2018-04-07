<?php

/* @galleries/view.twig */
class __TwigTemplate_91aef383c989f64f1d3ecc46e0a4529ec0f71c6acf900ac1e9c31e5cf211eaa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/view.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'settingsCaptionsView' => array($this, 'block_settingsCaptionsView'),
            'settingsCaptionsIconsEnabledView' => array($this, 'block_settingsCaptionsIconsEnabledView'),
            'settingsCaptionsIconsDisabledView' => array($this, 'block_settingsCaptionsIconsDisabledView'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
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
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 5
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 7
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 9
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
        echo "\">";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "title", array()), "html", null, true);
        echo "</a>
    </nav>

    <section class=\"supsystic-bar sgg-all-img-info-sect\" id=\"single-gallery-toolbar\">
        <ul class=\"supsystic-bar-controls\">
            <li title=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                <button class=\"button button-primary gallery import-to-gallery\">
                    <i class=\"fa fa-fw fa-upload\"></i>
                    ";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                </button>
            </li>
            <li>
                <a href=\"";
        // line 21
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
        echo "\"
                   class=\"button\">
                    <i class=\"fa fa-fw fa-cogs\"></i>
                    ";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Properties")), "html", null, true);
        echo "
                </a>
            </li>

            <li>
                <a target=\"_blank\"
                   href=\"";
        // line 30
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
        echo "\"
                   class=\"button\" data-button=\"preview\">
                    <i class=\"fa fa-fw fa-eye\"></i>
                    ";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
                </a>
            </li>
\t\t\t<li class=\"separator\">|</li>
        </ul>

\t\t<ul class=\"supsystic-bar-controls\">
\t\t\t<li>
\t\t\t\t<button class=\"button\" data-button=\"remove\" disabled>
\t\t\t\t\t<i class=\"fa fa-fw fa-trash-o\"></i>
\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete Image")), "html", null, true);
        echo "
\t\t\t\t</button>
\t\t\t</li>
\t\t\t<li class=\"separator\">|</li>
\t\t</ul>

\t\t<ul class=\"supsystic-bar-controls\">
\t\t\t<li>
\t\t\t\t<input id=\"find-by-caption\" type=\"text\" style=\"height:34px; width: 200px;\" placeholder=\"";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Search")), "html", null, true);
        echo "\">
\t\t\t</li>
\t\t\t<li class=\"separator\">|</li>
\t\t</ul>

        <ul class=\"supsystic-bar-controls\">
            <li title=\"";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort By: ")), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort By: ")), "html", null, true);
        echo "
                <select name=\"sortby\" style=\"height: 34px;\">
                    <option value=\"postion\" ";
        // line 60
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "position")) {
            echo "selected";
        }
        echo ">Position</option>
                    <option value=\"adate\" ";
        // line 61
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "adate")) {
            echo "selected";
        }
        echo ">Add date</option>
                    <option value=\"date\" ";
        // line 62
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "date")) {
            echo "selected";
        }
        echo ">Create date</option>
                    <option value=\"size\" ";
        // line 63
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "size")) {
            echo "selected";
        }
        echo ">Size</option>
                    <option value=\"name\" ";
        // line 64
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "name")) {
            echo "selected";
        }
        echo ">Name</option>
                    <option value=\"filename\" ";
        // line 65
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "filename")) {
            echo "selected";
        }
        echo ">File name</option>
\t\t\t\t\t";
        // line 66
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (($this->getAttribute($_environment_, "isPro", array(), "method") == true)) {
            echo "<option value=\"tags\" ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "tags")) {
                echo "selected";
            }
            echo ">Tags</option>";
        }
        // line 67
        echo "                    <option value=\"randomly\" ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "randomly")) {
            echo "selected";
        }
        echo ">Randomly</option>
                </select>
            </li>

\t\t\t<li id=\"sortToLi\" title=\"";
        // line 71
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort To: ")), "html", null, true);
        echo "\" style=\"";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()) == "randomly")) {
            echo " display:none; ";
        }
        echo " }}\">
\t\t\t\t";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort To: ")), "html", null, true);
        echo "
\t\t\t\t<select name=\"sortto\" style=\"height: 34px;\">
\t\t\t\t\t<option value=\"asc\" ";
        // line 74
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortto", array()) == "asc")) {
            echo "selected";
        }
        echo ">Asc</option>
\t\t\t\t\t<option value=\"desc\" ";
        // line 75
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortto", array()) == "desc")) {
            echo "selected";
        }
        echo ">Desc</option>
\t\t\t\t</select>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<button class=\"button button-primary\" data-button=\"sortbtn\">
\t\t\t\t\t<i class=\"fa fa-fw fa-check\"></i>
\t\t\t\t\tOk
\t\t\t\t</button>
\t\t\t</li>
        </ul>

        <ul class=\"supsystic-bar-controls\">
\t\t\t";
        // line 88
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (($this->getAttribute($_environment_, "isPro", array(), "method") == true)) {
            // line 89
            echo "                <li>
                    <select name=\"bulkactions\" style=\"height: 34px;\">
\t\t\t\t\t\t";
            // line 91
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_gallery_, "tags", array())) > 0)) {
                // line 92
                echo "                            <option value=\"add\">Add Selected Images to</option>
\t\t\t\t\t\t";
            }
            // line 94
            echo "                        <option value=\"newcat\">Create New Category</option>
\t\t\t\t\t\t";
            // line 95
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_gallery_, "tags", array())) > 0)) {
                // line 96
                echo "                            <option value=\"delcat\">Delete Category</option>
                            <option value=\"rencat\">Rename Category</option>
\t\t\t\t\t\t";
            }
            // line 99
            echo "                    </select>
                </li>

                <li>
\t\t\t\t\t";
            // line 103
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_gallery_, "tags", array())) > 0)) {
                // line 104
                echo "                        <select name=\"catactions\" style=\"height: 34px;\">
\t\t\t\t\t\t\t";
                // line 105
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_gallery_, "tags", array()));
                foreach ($context['_seq'] as $context["value"] => $context["title"]) {
                    // line 106
                    echo "                                <option value=\"";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "\">";
                    if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
                    echo twig_escape_filter($this->env, $_title_, "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                            <option value=\"allcat\" style=\"display:none;\">All Categories</option>
                        </select>
\t\t\t\t\t";
            }
            // line 111
            echo "                    <input type=\"text\" name=\"newTag\" ";
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_gallery_, "tags", array())) != 0)) {
                echo " style=\"display:none; height:34px; width: 150px;\" ";
            } else {
                echo " style=\"width: 150px; height:34px;\" ";
            }
            echo "value=\"\" placeholder=\"Category name...\">
                </li>

                <li>
                    <button class=\"button button-primary\" data-button=\"allimagetags\">
                        <i class=\"fa fa-fw fa-check\"></i>
\t\t\t\t\t\t";
            // line 117
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Apply")), "html", null, true);
            echo "
                    </button>
                </li>

\t\t\t";
        }
        // line 122
        echo "        </ul>
    </section>

";
    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        // line 128
        echo "    ";
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/view.twig", 128);
        // line 129
        echo "
    ";
        // line 130
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        if (( !array_key_exists("gallery", $context) || (null === $_gallery_))) {
            // line 131
            echo "        <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("The gallery is does not exists")), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 133
            echo "        ";
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if (twig_test_empty($this->getAttribute($_gallery_, "photos", array()))) {
                // line 134
                echo "            <h2 style=\"text-align: center; color: #bfbfbf; margin: 50px 0 25px 0;\">
                <span style=\"margin-bottom: 20px; display: block;\">
                    ";
                // line 136
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently this gallery has no images")), "html", null, true);
                echo "
                </span>
                ";
                // line 138
                if (isset($context["importTypes"])) { $_importTypes_ = $context["importTypes"]; } else { $_importTypes_ = null; }
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo $_importTypes_->getshow("1000", $this->getAttribute($_gallery_, "id", array()));
                echo "
            </h2>
        ";
            } else {
                // line 141
                echo "            ";
                $context["view"] = $this->loadTemplate("@ui/type.twig", "@galleries/view.twig", 141);
                // line 142
                echo "            ";
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                $context["entity"] = array("images" => $this->getAttribute($_gallery_, "photos", array()));
                // line 143
                echo "            ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["sliderSettings"] = $_settings_;
                // line 144
                echo "
            ";
                // line 145
                if (isset($context["viewType"])) { $_viewType_ = $context["viewType"]; } else { $_viewType_ = null; }
                if (($_viewType_ == "block")) {
                    // line 146
                    echo "                ";
                    if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    echo $_view_->getblock_view($_entity_);
                    echo "
            ";
                }
                // line 148
                echo "
\t\t\t";
                // line 149
                if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_entity_, "images", array())) > 0)) {
                    // line 150
                    echo "\t\t\t\t";
                    $context["pagination_view"] = $this->loadTemplate("@galleries/helpers/pagination_view.twig", "@galleries/view.twig", 150);
                    // line 151
                    echo "\t\t\t\t";
                    if (isset($context["pagination_view"])) { $_pagination_view_ = $context["pagination_view"]; } else { $_pagination_view_ = null; }
                    if (isset($context["paginationSettings"])) { $_paginationSettings_ = $context["paginationSettings"]; } else { $_paginationSettings_ = null; }
                    echo $_pagination_view_->getpaginationRender($_paginationSettings_);
                    echo "
\t\t\t";
                }
                // line 153
                echo "
            ";
                // line 154
                if (isset($context["viewType"])) { $_viewType_ = $context["viewType"]; } else { $_viewType_ = null; }
                if (($_viewType_ == "list")) {
                    // line 155
                    echo "                ";
                    if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                    if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
                    if (isset($context["sliderSettings"])) { $_sliderSettings_ = $context["sliderSettings"]; } else { $_sliderSettings_ = null; }
                    if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                    echo $_view_->getlist_view($_entity_, $_sliderSettings_, $this->getAttribute($_gallery_, "id", array()));
                    echo "
            ";
                }
                // line 157
                echo "        ";
            }
            // line 158
            echo "    ";
        }
        // line 159
        echo "
    <div id=\"importDialog\" title=\"";
        // line 160
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
        ";
        // line 161
        if (isset($context["importTypes"])) { $_importTypes_ = $context["importTypes"]; } else { $_importTypes_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo $_importTypes_->getshow(400, $this->getAttribute($_gallery_, "id", array()));
        echo "
    </div>

    <div id=\"linkedImagesDialog\" title=\"";
        // line 164
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Linked Images")), "html", null, true);
        echo "\" style=\"display:none;\">
        <div class=\"linked-images-action-buttons\">
            <button class=\"button add\">";
        // line 166
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add images")), "html", null, true);
        echo "</button>
            <button class=\"button remove\">";
        // line 167
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove selected")), "html", null, true);
        echo "</button>
        </div>
        <div class=\"linked-attachments-list\">
            
        </div>
        <div class=\"loading-container\">
            <i class=\"fa fa-spinner fa-spin fa-2x\"></i>
        </div>
    </div>

    <div id=\"effectDialog\" title=\"";
        // line 177
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\" style=\"display:none;\">
        <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
            ";
        // line 179
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Skwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phophorus Rotate", "phophorus-offset" => "Phophorus Offset", "phophorus-scale" => "Phophorus Scale", "cube" => "Cube", "polaroid" => "Polaroid", "3d-cube" => "3D Cube");
        // line 208
        echo "            ";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 215
        echo "            ";
        ob_start();
        // line 216
        echo "                border-radius: ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
                ";
        // line 217
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((($this->getAttribute($_environment_, "isPro", array(), "method") && $this->getAttribute($_settings_, "icons", array(), "any", true, true)) && ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "enabled", array()) == "true"))) {
            // line 218
            echo "                    ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_enabled", array()) == "true")) {
                // line 219
                echo "                        background-color:";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "overlay_color", array()), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
                    ";
            }
            // line 221
            echo "                ";
        } else {
            // line 222
            echo "                    color:";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
                    background-color:";
            // line 223
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
                    font-size:";
            // line 224
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
                    ";
            // line 225
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_align", array()) != 3)) {
                // line 226
                echo "                        text-align:";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_align", array()), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
                    ";
            }
            // line 228
            echo "                    ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 229
                echo "                        ";
                // line 230
                echo "                        bottom:0;
                    ";
            }
            // line 232
            echo "                ";
        }
        // line 233
        echo "            ";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 234
        echo "
\t\t\t";
        // line 235
        $this->displayBlock('settingsCaptionsView', $context, $blocks);
        // line 327
        echo "        </div>
        <style>
            .hi-icon { 
                color: ";
        // line 330
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "color", array()), "html", null, true);
        echo " !important; 
                background: ";
        // line 331
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background", array()), "html", null, true);
        echo " !important; 
            }
            .hi-icon:hover { 
                color: ";
        // line 334
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "hover_color", array()), "html", null, true);
        echo " !important; 
                background: ";
        // line 335
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background_hover", array()), "html", null, true);
        echo " !important; 
            }
            .hi-icon { 
                width: ";
        // line 338
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important; 
                height: ";
        // line 339
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important; 
            }
            .hi-icon:before { 
                font-size: ";
        // line 342
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
        echo "px !important; 
                line-height: ";
        // line 343
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important; 
            }
        </style>
    </div>
";
    }

    // line 235
    public function block_settingsCaptionsView($context, array $blocks = array())
    {
        // line 236
        echo "\t\t\t\t";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "icons", array()), "enabled", array()) == "false")) {
            // line 237
            echo "\t\t\t\t\t";
            $this->displayBlock('settingsCaptionsIconsEnabledView', $context, $blocks);
            // line 295
            echo "\t\t\t\t";
        } else {
            // line 296
            echo "\t\t\t\t\t";
            $this->displayBlock('settingsCaptionsIconsDisabledView', $context, $blocks);
            // line 325
            echo "\t\t\t\t";
        }
        // line 326
        echo "\t\t\t";
    }

    // line 237
    public function block_settingsCaptionsIconsEnabledView($context, array $blocks = array())
    {
        // line 238
        echo "\t\t\t\t\t\t";
        if (isset($context["effects"])) { $_effects_ = $context["effects"]; } else { $_effects_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_effects_);
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 239
            echo "\t\t\t\t\t\t\t";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (($_type_ == "direction-aware")) {
                // line 240
                echo "\t\t\t\t\t\t\t\t<figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box__right\">Right ? Left</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box__left\">Left ? Right</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box__top\">Top ? Bottom</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box__bottom\">Bottom ? Top</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box__center\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 248
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" class=\"dialog-image\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"select-element\">
\t\t\t\t\t\t\t\t\t\t";
                // line 251
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t";
            } elseif (($_type_ == "3d-cube")) {
                // line 255
                echo "\t\t\t\t\t\t\t\t<figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"box-3d-cube-scene\" style=\"perspective: 300px;-webkit-perspective: 300px\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-3d-cube\"
\t\t\t\t\t\t\t\t\t\t\t style=\"
\t\t\t\t\t\t\t\t\t\t\t\t transform-origin:50% 50% -75px;
\t\t\t\t\t\t\t\t\t\t\t\t -ms-transform-origin: 50% 50% -75px;
\t\t\t\t\t\t\t\t\t\t\t\t -webkit-transform-origin: 50% 50% -75px;
\t\t\t\t\t\t\t\t\t\t\t\t width:150px; height:150px
\t\t\t\t\t\t\t\t\t\t\t \"
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"face front\" style=\"width:150px; height:150px\">
\t\t\t\t\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 266
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" class=\"dialog-image\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div style=\"";
                // line 268
                if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
                echo twig_escape_filter($this->env, twig_trim_filter($_figcaptionStyle_), "html", null, true);
                echo "width:150px; height:150px\" class=\"face back\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"grid-gallery-figcaption-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 270
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"select-element\">
\t\t\t\t\t\t\t\t\t\t";
                // line 276
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t";
            } else {
                // line 280
                echo "\t\t\t\t\t\t\t\t<figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 281
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" class=\"dialog-image\">
\t\t\t\t\t\t\t\t\t<figcaption style=\"";
                // line 282
                if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
                echo twig_escape_filter($this->env, twig_trim_filter($_figcaptionStyle_), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"grid-gallery-figcaption-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 284
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t<div class=\"select-element\">
\t\t\t\t\t\t\t\t\t\t";
                // line 288
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t";
            }
            // line 292
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "\t\t\t\t\t\t<div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
\t\t\t\t\t";
    }

    // line 296
    public function block_settingsCaptionsIconsDisabledView($context, array $blocks = array())
    {
        // line 297
        echo "\t\t\t\t\t\t<div class=\"captions-effect-with-icons\" data-confirm=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<h3>Captions effects with icons</h3>
\t\t\t\t\t\t\t";
        // line 299
        $this->displayBlock('iconsEffects', $context, $blocks);
        // line 323
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
    }

    // line 299
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 300
        echo "\t\t\t\t\t\t\t\t";
        if (isset($context["iconsWithCaptionsEffects"])) { $_iconsWithCaptionsEffects_ = $context["iconsWithCaptionsEffects"]; } else { $_iconsWithCaptionsEffects_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_iconsWithCaptionsEffects_);
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 301
            echo "\t\t\t\t\t\t\t\t\t<figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 302
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" class=\"dialog-image\"/>
\t\t\t\t\t\t\t\t\t\t<figcaption style=\"";
            // line 303
            if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
            echo twig_escape_filter($this->env, twig_trim_filter($_figcaptionStyle_), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t<div class=\"caption-with-";
            // line 309
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
            // line 311
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\tvertical-align:";
            // line 312
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";\">
\t\t\t\t\t\t\t\t\t\t\t\t\tCaption
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"select-element\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 318
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        echo "\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "@galleries/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  851 => 322,  841 => 318,  831 => 312,  826 => 311,  820 => 309,  810 => 303,  805 => 302,  799 => 301,  793 => 300,  790 => 299,  785 => 323,  783 => 299,  777 => 297,  774 => 296,  769 => 293,  763 => 292,  756 => 288,  748 => 284,  742 => 282,  737 => 281,  731 => 280,  724 => 276,  714 => 270,  708 => 268,  702 => 266,  686 => 255,  679 => 251,  672 => 248,  659 => 240,  655 => 239,  649 => 238,  646 => 237,  642 => 326,  639 => 325,  636 => 296,  633 => 295,  630 => 237,  626 => 236,  623 => 235,  613 => 343,  608 => 342,  601 => 339,  596 => 338,  589 => 335,  584 => 334,  577 => 331,  572 => 330,  567 => 327,  565 => 235,  562 => 234,  559 => 233,  556 => 232,  552 => 230,  550 => 229,  546 => 228,  539 => 226,  536 => 225,  529 => 224,  524 => 223,  518 => 222,  515 => 221,  508 => 219,  504 => 218,  500 => 217,  494 => 216,  491 => 215,  488 => 208,  486 => 179,  481 => 177,  468 => 167,  464 => 166,  459 => 164,  451 => 161,  447 => 160,  444 => 159,  441 => 158,  438 => 157,  428 => 155,  425 => 154,  422 => 153,  414 => 151,  411 => 150,  408 => 149,  405 => 148,  397 => 146,  394 => 145,  391 => 144,  387 => 143,  383 => 142,  380 => 141,  372 => 138,  367 => 136,  363 => 134,  359 => 133,  353 => 131,  350 => 130,  347 => 129,  344 => 128,  341 => 127,  334 => 122,  326 => 117,  311 => 111,  306 => 108,  293 => 106,  288 => 105,  285 => 104,  282 => 103,  276 => 99,  271 => 96,  268 => 95,  265 => 94,  261 => 92,  258 => 91,  254 => 89,  251 => 88,  232 => 75,  225 => 74,  220 => 72,  211 => 71,  200 => 67,  190 => 66,  183 => 65,  176 => 64,  169 => 63,  162 => 62,  155 => 61,  148 => 60,  143 => 58,  139 => 57,  130 => 51,  119 => 43,  106 => 33,  98 => 30,  89 => 24,  81 => 21,  74 => 17,  68 => 14,  55 => 9,  47 => 7,  39 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/view.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Galleries/views/view.twig");
    }
}
