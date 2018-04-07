<?php

/* @ui/type.twig */
class __TwigTemplate_889afe4c63b4284a53c6ffcd72b8370d9a7d5823338c202f7fd03b412df4fcbb extends Twig_Template
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
        // line 39
        echo "
";
        // line 52
        echo "
";
        // line 82
        echo "
";
        // line 115
        echo "
";
        // line 158
        echo "
";
    }

    // line 1
    public function getlist_view($__entities__ = null, $__sliderSettings__ = null, $__galleryId__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entities" => $__entities__,
            "sliderSettings" => $__sliderSettings__,
            "galleryId" => $__galleryId__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["view"] = $this;
            // line 3
            echo "    ";
            ob_start();
            // line 4
            echo "    <tr class=\"ui-jqgrid-labels-custom\" role=\"rowheader\">
        <th scope=\"col\" id=\"check-all\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            <input type=\"checkbox\" id=\"checkAll\" class=\"gg-checkbox\">
        </th>
        <th scope=\"col\" id=\"icon\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image")), "html", null, true);
            echo "
        </th>
        <th scope=\"col\" id=\"title\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 12
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Properties")), "html", null, true);
            echo "
        </th>
        <th scope=\"col\" id=\"date\" class=\"ui-state-default ui-th-column ui-th-ltr jqgh_ui-jqgrid-htable_id\">
            ";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Date")), "html", null, true);
            echo "
        </th>
    </tr>
    ";
            $context["head"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 19
            echo "
    <table id=\"ui-jqgrid-htable-img\" class=\"ui-jqgrid-htable\" style=\"margin: 7px 0 7px -5px; width: 100%;\">
        <thead class=\"jqgrid-head-nav\">
        ";
            // line 22
            if (isset($context["head"])) { $_head_ = $context["head"]; } else { $_head_ = null; }
            echo twig_escape_filter($this->env, $_head_, "html", null, true);
            echo "
        </thead>
        <tfoot>
        ";
            // line 25
            if (isset($context["head"])) { $_head_ = $context["head"]; } else { $_head_ = null; }
            echo twig_escape_filter($this->env, $_head_, "html", null, true);
            echo "
        </tfoot>
        <tbody id=\"the-list\" data-sortable data-container=\"list\">
        ";
            // line 28
            if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entities_, "folders", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 29
                echo "            ";
                if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
                echo $_view_->getlist_folder($_folder_);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        ";
            if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entities_, "images", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 32
                echo "            ";
                if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                if (isset($context["sliderSettings"])) { $_sliderSettings_ = $context["sliderSettings"]; } else { $_sliderSettings_ = null; }
                if (isset($context["galleryId"])) { $_galleryId_ = $context["galleryId"]; } else { $_galleryId_ = null; }
                echo $_view_->getlist_image($_image_, $_sliderSettings_, $_galleryId_);
                echo "
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 34
                echo "            ";
                // line 35
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </tbody>
    </table>
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

    // line 40
    public function getblock_view($__entities__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entities" => $__entities__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 41
            echo "    ";
            $context["view"] = $this;
            // line 42
            echo "    <ul class=\"sg-photos\" data-sortable data-container=\"block\">
        ";
            // line 43
            if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entities_, "folders", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 44
                echo "            ";
                if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
                echo $_view_->getblock_folder($_folder_);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
        ";
            // line 47
            if (isset($context["entities"])) { $_entities_ = $context["entities"]; } else { $_entities_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_entities_, "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 48
                echo "            ";
                if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo $_view_->getblock_image($_image_);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    </ul>
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

    // line 53
    public function getblock_folder($__folder__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "folder" => $__folder__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 54
            echo "    <li data-droppable class=\"gg-list-item\" data-entity data-entity-id=\"";
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "id", array()), "html", null, true);
            echo "\" data-entity-type=\"folder\"
        data-entity-info=\"";
            // line 55
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($_folder_));
            echo "\">
        <div class=\"gg-item\" style=\"z-index: 0;\">
            <div class=\"gg-check\">
                <input type=\"checkbox\" class=\"gg-checkbox\" data-observable>
            </div>
            <a href=\"";
            // line 60
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "photos", 1 => "view", 2 => array("folder_id" => $this->getAttribute($_folder_, "id", array()), "view" => "block")), "method"), "html", null, true);
            echo "\">
                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXk5+pYcSvrAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC\"
                     alt=\"\" width=\"150\" height=\"150\"/>

                <div style=\"position: absolute; top: 55px; left: 55px; color: #bdc3c7;\">
                    <i class=\"fa fa-folder-open-o\" style=\"font-size: 5em;\"></i>
                </div>

                <div class=\"gg-folder-photos\">
                    <i class=\"fa fa-picture-o\"></i> <span class=\"gg-folder-photos-num\">";
            // line 69
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_folder_, "photos", array())), "html", null, true);
            echo "</span>
                </div>
            </a>

            <p>
                <span class=\"folder-title\">";
            // line 74
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($_folder_, "title", array())), "html", null, true);
            echo "</span>
                <small>
                    ";
            // line 76
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "date", array()), "html", null, true);
            echo "
                </small>
            </p>
        </div>
    </li>
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

    // line 83
    public function getblock_image($__image__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "image" => $__image__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 84
            echo "    <li class=\"gg-list-item\" data-entity data-entity-id=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" data-entity-type=\"photo\"
        data-entity-info=\"";
            // line 85
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($_image_));
            echo "\">
        <div class=\"gg-item\" style=\"z-index: 10;\">
            <div class=\"gg-check\">
                <input type=\"checkbox\" class=\"gg-checkbox\" data-observable>
            </div>
            <a data-colorbox href=\"";
            // line 90
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "full", array()), "url", array()), "html", null, true);
            echo "\">
                ";
            // line 91
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "thumbnail", array()))) {
                // line 92
                echo "                    ";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "full", array()), "url", array());
                // line 93
                echo "                    ";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                if (($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "orientation", array()) == "landscape")) {
                    // line 94
                    echo "                        ";
                    $context["sizes"] = array("width" => 80, "height" => 60);
                    // line 95
                    echo "                    ";
                } else {
                    // line 96
                    echo "                        ";
                    $context["sizes"] = array("width" => 60, "height" => 80);
                    // line 97
                    echo "                    ";
                }
                // line 98
                echo "                ";
            } else {
                // line 99
                echo "                    ";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "thumbnail", array()), "url", array());
                // line 100
                echo "                    ";
                $context["sizes"] = array("width" => 60, "height" => 60);
                // line 101
                echo "                ";
            }
            // line 102
            echo "                <img class=\"supsystic-lazy\" data-original=\"";
            if (isset($context["src"])) { $_src_ = $context["src"]; } else { $_src_ = null; }
            echo twig_escape_filter($this->env, $_src_, "html", null, true);
            echo "\" alt=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "title", array()), "html", null, true);
            echo "\" width=\"150\"
                     style=\"min-height:150px;max-height:150px;\"/>
            </a>

            <p title=\"";
            // line 106
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "title", array()), "html", null, true);
            echo "\">
                ";
            // line 107
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "title", array()), "html", null, true);
            echo "
                <small>
                    ";
            // line 109
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "dateFormatted", array()), "html", null, true);
            echo "
                </small>
            </p>
        </div>
    </li>
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

    // line 116
    public function getlist_folder($__folder__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "folder" => $__folder__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 117
            echo "    <tr data-droppable data-entity data-entity-id=\"";
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "id", array()), "html", null, true);
            echo "\" data-entity-type=\"folder\"
        data-entity-info=\"";
            // line 118
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($_folder_));
            echo "\">
        <th scope=\"row\" class=\"check-column\">
            <label class=\"screen-reader-text\"
                   for=\"cb-select-";
            // line 121
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "id", array()), "html", null, true);
            echo "\">";
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select %s")), $this->getAttribute($_folder_, "title", array())), "html", null, true);
            echo "</label>
            <input type=\"checkbox\" name=\"folder[]\" id=\"cb-select-";
            // line 122
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "id", array()), "html", null, true);
            echo "\" value=\"";
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "id", array()), "html", null, true);
            echo "\"
                   data-observable>
        </th>
        <td class=\"column-icon media-icon\" style=\"position: relative;\">
            <a href=\"";
            // line 126
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "photos", 1 => "view", 2 => array("folder_id" => $this->getAttribute($_folder_, "id", array()), "view" => "list")), "method"), "html", null, true);
            echo "\"
               data-colorbox>
                <img width=\"60\" height=\"60\"
                     src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXk5+pYcSvrAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC\"
                     class=\"attachment-80x60 supsystic-lazy\" alt=\"";
            // line 130
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "title", array()), "html", null, true);
            echo "\">
            </a>

            <div style=\"position: absolute; top: 20px; left: 31px; color: #bdc3c7; z-index: 100;\">
                <i class=\"fa fa-folder-open-o\" style=\"font-size: 3em;\"></i>
            </div>
        </td>
        <td class=\"title column-title\">
            <strong>
                <a href=\"";
            // line 139
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "photos", 1 => "view", 2 => array("folder_id" => $this->getAttribute($_folder_, "id", array()), "view" => "list")), "method"), "html", null, true);
            echo "\">
                    <span class=\"folder-title\">";
            // line 140
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_title_string_filter($this->env, $this->getAttribute($_folder_, "title", array()));
            echo "</span>
                </a>
            </strong>

            <p>
                <span class=\"gg-folder-photos-num\">
                    ";
            // line 146
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_folder_, "photos", array())), "html", null, true);
            echo "
                </span>
                ";
            // line 148
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_folder_, "photos", array())) == 1)) {
                // line 149
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("photo")), "html", null, true);
                echo "
                ";
            } else {
                // line 151
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("photos")), "html", null, true);
                echo "
                ";
            }
            // line 153
            echo "            </p>
        </td>
        <td class=\"date column-date\">";
            // line 155
            if (isset($context["folder"])) { $_folder_ = $context["folder"]; } else { $_folder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_folder_, "date", array()), "html", null, true);
            echo "</td>
    </tr>
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

    // line 159
    public function getlist_image($__image__ = null, $__sliderSettings__ = null, $__galleryId__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "image" => $__image__,
            "sliderSettings" => $__sliderSettings__,
            "galleryId" => $__galleryId__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 160
            echo "    ";
            $context["nonProMsg"] = "Available in PRO";
            // line 161
            echo "    <tr data-entity data-entity-id=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" data-settings=\"";
            if (isset($context["sliderSettings"])) { $_sliderSettings_ = $context["sliderSettings"]; } else { $_sliderSettings_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($_sliderSettings_));
            echo "\" data-entity-type=\"photo\" data-entity-info=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($_image_));
            echo "\" class=\"ggImgInfoRow\">
        <th scope=\"row\" class=\"check-column ggImgVertMoveCol\">
            <i class=\"fa fa-arrows-v ggImgVerticalMove\" aria-hidden=\"true\"></i>
            <label class=\"screen-reader-text\"
                   for=\"cb-select-";
            // line 165
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\">";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select %s")), $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "title", array())), "html", null, true);
            echo "</label>
            <input type=\"checkbox\" name=\"image[]\" id=\"cb-select-";
            // line 166
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" value=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" data-observable>
        </th>
        <td class=\"column-icon media-icon\">
            <a href=\"";
            // line 169
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "full", array()), "url", array()), "html", null, true);
            echo "\" data-colorbox>
                ";
            // line 170
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "thumbnail", array()))) {
                // line 171
                echo "                    ";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "full", array()), "url", array());
                // line 172
                echo "                    ";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                if (($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "orientation", array()) == "landscape")) {
                    // line 173
                    echo "                        ";
                    $context["sizes"] = array("width" => 80, "height" => 60);
                    // line 174
                    echo "                    ";
                } else {
                    // line 175
                    echo "                        ";
                    $context["sizes"] = array("width" => 60, "height" => 80);
                    // line 176
                    echo "                    ";
                }
                // line 177
                echo "                ";
            } else {
                // line 178
                echo "                    ";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                $context["src"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "sizes", array()), "thumbnail", array()), "url", array());
                // line 179
                echo "                    ";
                $context["sizes"] = array("width" => 60, "height" => 60);
                // line 180
                echo "                ";
            }
            // line 181
            echo "                <img width=\"75\" height=\"75\" data-original=\"";
            if (isset($context["src"])) { $_src_ = $context["src"]; } else { $_src_ = null; }
            echo twig_escape_filter($this->env, $_src_, "html", null, true);
            echo "\"
                     class=\"attachment-thumbnail supsystic-lazy\" alt=\"";
            // line 182
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "title", array()), "html", null, true);
            echo "\">
            </a>
\t\t\t<span class=\"gg-image-upload-date description\">";
            // line 184
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "gg_wp_upload_date", array()), "html", null, true);
            echo "</span>
        </td>
        <td class=\"title column-title\">
            <form id=\"photo-editor-";
            // line 187
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"photo-editor attachment-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "id", array()), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"gg-tab-links gg-image-params\" data-tabs=\"gg-image-";
            // line 188
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"gg-tab-link active\" data-tab-info=\"page-";
            // line 189
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-1\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 190
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-2\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 191
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-3\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("SEO")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 192
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-4\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Link")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 193
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-5\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 194
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-6\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 195
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-7\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Linked images")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 196
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-8\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Crop")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"gg-tab-link\" data-tab-info=\"page-";
            // line 197
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-9\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image on hover")), "html", null, true);
            echo "</div>

\t\t\t\t\t<a data-image-id=\"";
            // line 199
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" data-attachment-id=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "id", array()), "html", null, true);
            echo "\"
\t\t\t\t\t   class=\"add-new-h2 button replace-image\">
\t\t\t\t\t\t";
            // line 201
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Replace image")), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"gg-tab-pages\" data-tabs=\"gg-image-";
            // line 205
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"gg-tab-page\" data-tab-info=\"page-";
            // line 206
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-1\">
\t\t\t\t\t\t<p id=\"photo-caption-";
            // line 207
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"caption\" value=\"";
            // line 208
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "caption", array());
            echo "\"
\t\t\t\t\t\t\t\t   placeholder=\"";
            // line 209
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "html", null, true);
            echo "\" style=\"width: 70%;\"/>
\t\t\t\t\t\t\t<button class=\"button selectCaptionEffectBtn\" data-id=\"";
            // line 210
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "id", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t<input type=\"text\" class=\"captionEffectVal\" name=\"captionEffect\" data-id=\"";
            // line 211
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "id", array()), "html", null, true);
            echo "\" value=\"";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            if (isset($context["sliderSettings"])) { $_sliderSettings_ = $context["sliderSettings"]; } else { $_sliderSettings_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_image_, "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_image_, "attachment", array(), "any", false, true), "captionEffect", array()), $this->getAttribute($this->getAttribute($this->getAttribute($_sliderSettings_, "thumbnail", array()), "overlay", array()), "effect", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute($_sliderSettings_, "thumbnail", array()), "overlay", array()), "effect", array()))), "html", null, true);
            echo "\" style=\"display: none;\" />
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 214
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-2\">
\t\t\t\t\t\t<p id=\"photo-caption-description-";
            // line 215
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 216
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (($this->getAttribute($_environment_, "isPro", array(), "method") == false)) {
                // line 217
                echo "\t\t\t\t\t\t\t\t<input type=\"text\" style=\"width: 70%;\" disabled placeholder=\"Description\">
\t\t\t\t\t\t\t\t<span style=\"color:red\" class=\"description\">
\t\t\t\t\t\t\t\t<a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=images_caption_description&utm_campaign=gallery\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t";
                // line 220
                if (isset($context["nonProMsg"])) { $_nonProMsg_ = $context["nonProMsg"]; } else { $_nonProMsg_ = null; }
                echo $_nonProMsg_;
                echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            } else {
                // line 224
                echo "\t\t\t\t\t\t\t\t<input type=\"text\" name=\"captionDescription\" value=\"";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "captionDescription", array());
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description")), "html", null, true);
                echo "\" style=\"width: 70%;\"/>
\t\t\t\t\t\t\t";
            }
            // line 226
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 228
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-3\">
\t\t\t\t\t\t<p id=\"photo-seo-";
            // line 229
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"description\" value=\"";
            // line 230
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "description", array());
            echo "\"
\t\t\t\t\t\t\t\t   style=\"width: 40%;\"
\t\t\t\t\t\t\t\t   placeholder=\"";
            // line 232
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description")), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t<input type=\"text\" name=\"alt\" value=\"";
            // line 233
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "alt", array()))) {
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                if (($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "alt", array()) == " ")) {
                    echo "";
                } else {
                    if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "alt", array()), "html", null, true);
                }
            } else {
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "title", array()), "html", null, true);
            }
            echo "\"
\t\t\t\t\t\t\t\t   style=\"width: 40%;\"
\t\t\t\t\t\t\t\t   placeholder=\"";
            // line 235
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alternative text")), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 238
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-4\">
\t\t\t\t\t\t<p id=\"photo-link-";
            // line 239
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\t\tname=\"link\"
\t\t\t\t\t\t\t\t\tvalue=\"";
            // line 243
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "external_link", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\tstyle=\"width: 50%;\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 245
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("http://example.com/")), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t<label style=\"border: 1px solid #9D9D9D;padding: 5px;\">
\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\tname=\"target\"
\t\t\t\t\t\t\t\t\t\tvalue=\"_blank\"
\t\t\t\t\t\t\t\t\t\t";
            // line 252
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            if (($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "target", array()) == "_blank")) {
                // line 253
                echo "\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 255
            echo "\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t";
            // line 256
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open in new window")), "html", null, true);
            echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label style=\"border: 1px solid #9D9D9D;padding: 5px; margin-left: 5px;\">
\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\t\t\t\t\tname=\"rel\"
\t\t\t\t\t\t\t\t\t\tvalue=\"nofollow\"
\t\t\t\t\t\t\t\t\t\t";
            // line 263
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            if (($this->getAttribute($this->getAttribute($_image_, "attachment", array()), "rel", array()) == "nofollow")) {
                // line 264
                echo "\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 266
            echo "\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t";
            // line 267
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add nofollow attribute")), "html", null, true);
            echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 271
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-5\">
\t\t\t\t\t\t<p id=\"photo-video-";
            // line 272
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\t\t\t";
            // line 275
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if ($this->getAttribute($_environment_, "isPro", array(), "method")) {
                // line 276
                echo "\t\t\t\t\t\t\t\t\t\tname=\"video\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                // line 277
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "video", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 279
                echo "\t\t\t\t\t\t\t\t\t\tdisabled=\"disabled\"
\t\t\t\t\t\t\t\t\t";
            }
            // line 281
            echo "\t\t\t\t\t\t\t\t\tstyle=\"width: 70%;\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
            // line 282
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video URL")), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t";
            // line 284
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (($this->getAttribute($_environment_, "isPro", array(), "method") == false)) {
                // line 285
                echo "\t\t\t\t\t\t\t\t<span style=\"color:red\" class=\"description\">
                            <a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=video&utm_campaign=gallery\" target=\"_blank\">
\t\t\t\t\t\t\t\t";
                // line 287
                if (isset($context["nonProMsg"])) { $_nonProMsg_ = $context["nonProMsg"]; } else { $_nonProMsg_ = null; }
                echo $_nonProMsg_;
                echo "
\t\t\t\t\t\t\t</a>
                        </span>
\t\t\t\t\t\t\t";
            }
            // line 291
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 293
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-6\">
\t\t\t\t\t\t<p id=\"photo-tags-";
            // line 294
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" ";
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (($this->getAttribute($_environment_, "isPro", array(), "method") == true)) {
                echo "style=\"width: 70%;\"";
            }
            echo ">
\t\t\t\t\t\t\t";
            // line 295
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (($this->getAttribute($_environment_, "isPro", array(), "method") == false)) {
                // line 296
                echo "\t\t\t\t\t\t\t\t<input type=\"text\" disabled placeholder=\"Categories\" style=\"width: 70%;\">
\t\t\t\t\t\t\t\t<span style=\"color:red\" class=\"description\">
\t\t\t\t\t\t\t\t\t<a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=imagescategories&utm_campaign=gallery\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t";
                // line 299
                if (isset($context["nonProMsg"])) { $_nonProMsg_ = $context["nonProMsg"]; } else { $_nonProMsg_ = null; }
                echo $_nonProMsg_;
                echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            } else {
                // line 303
                echo "\t\t\t\t\t\t\t\t<input type=\"text\" class=\"gg-tags\" id=\"tags-";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
                echo "\" data-id=\"";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t   value=\"";
                // line 304
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_join_filter($this->getAttribute($_image_, "tags", array()), ",");
                echo "\">
\t\t\t\t\t\t\t";
            }
            // line 306
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 308
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-7\">
\t\t\t\t\t\t<p id=\"photo-linked-images-";
            // line 309
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 310
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (($this->getAttribute($_environment_, "isPro", array(), "method") == false)) {
                // line 311
                echo "\t\t\t\t\t\t\t\t<button class=\"button disabled\" disabled>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose images")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t<span style=\"color:red\" class=\"description\">
                            <a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=linked_images&utm_campaign=gallery\" target=\"_blank\">
\t\t\t\t\t\t\t\t";
                // line 314
                if (isset($context["nonProMsg"])) { $_nonProMsg_ = $context["nonProMsg"]; } else { $_nonProMsg_ = null; }
                echo $_nonProMsg_;
                echo "
\t\t\t\t\t\t\t</a>
                        </span>
\t\t\t\t\t\t\t";
            } else {
                // line 318
                echo "\t\t\t\t\t\t\t\t<button class=\"button selectLinkedImages\" data-id=\"";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose images")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose images")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"linkedImages\" data-id=\"";
                // line 319
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
                echo "\" value=\"";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_image_, "attachment", array(), "any", false, true), "linkedImages", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_image_, "attachment", array(), "any", false, true), "linkedImages", array()), "")) : ("")), "html", null, true);
                echo "\" style=\"display: none;\" />
\t\t\t\t\t\t\t";
            }
            // line 321
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 323
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-8\">
\t\t\t\t\t\t<p id=\"photo-crop-";
            // line 324
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<label style=\"margin-left: 5px;\">Image crop position: </label>
\t\t\t\t\t\t\t";
            // line 326
            $context["cropPositionList"] = array("left-top" => "Top Left", "center-top" => "Top Center", "right-top" => "Top Right", "left-center" => "Center Left", "center-center" => "Center Center", "right-center" => "Center Right", "left-bottom" => "Bottom Left", "center-bottom" => "Bottom Center", "right-bottom" => "Bottom Right");
            // line 337
            echo "\t\t\t\t\t\t\t<select name=\"cropPosition\">
\t\t\t\t\t\t\t\t";
            // line 338
            if (isset($context["cropPositionList"])) { $_cropPositionList_ = $context["cropPositionList"]; } else { $_cropPositionList_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($_cropPositionList_);
            foreach ($context['_seq'] as $context["value"] => $context["title"]) {
                // line 339
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
                echo "\" ";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (((($this->getAttribute($this->getAttribute($_image_, "attachment", array(), "any", false, true), "cropPosition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_image_, "attachment", array(), "any", false, true), "cropPosition", array()), "center-center")) : ("center-center")) == $_value_)) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
                echo twig_escape_filter($this->env, $_title_, "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"gg-tab-page ggSettingsDisplNone\" data-tab-info=\"page-";
            // line 344
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "-9\">
\t\t\t\t\t\t<p id=\"hover-caption-image-";
            // line 345
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" class=\"tabcontent-";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 346
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (($this->getAttribute($_environment_, "isPro", array(), "method") == false)) {
                // line 347
                echo "\t\t\t\t\t\t\t\t<button class=\"button disabled\" disabled=\"disabled\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose image")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t<span class=\"description\">
\t\t\t\t\t\t\t\t\t<a href=\"http://supsystic.com/plugins/photo-gallery?utm_source=plugin&utm_medium=hover_caption_image_bg&utm_campaign=gallery\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t";
                // line 350
                if (isset($context["nonProMsg"])) { $_nonProMsg_ = $context["nonProMsg"]; } else { $_nonProMsg_ = null; }
                echo $_nonProMsg_;
                echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            } else {
                // line 354
                echo "\t\t\t\t\t\t\t\t<input id=\"hover-caption-image-inp-";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
                echo "\" type=\"text\" name=\"hoverCaptionImageInp\" value=\"";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_image_, "attachment", array(), "any", false, true), "hoverCaptionImage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_image_, "attachment", array(), "any", false, true), "hoverCaptionImage", array()), "")) : ("")), "html", null, true);
                echo "\" style=\"width: 70%;\" readonly=\"readonly\"/>
\t\t\t\t\t\t\t\t<button class=\"button select-hover-caption-image\" data-image-id=\"";
                // line 355
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose image")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose image")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t";
            }
            // line 357
            echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <input name=\"replace_attachment_id\" id=\"replace_attachment_id_";
            // line 361
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"image_id\" value=\"";
            // line 362
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "id", array()), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"attachment_id\" value=\"";
            // line 363
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_image_, "attachment", array()), "id", array()), "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"gallery_id\" value=\"";
            // line 364
            if (isset($context["galleryId"])) { $_galleryId_ = $context["galleryId"]; } else { $_galleryId_ = null; }
            echo twig_escape_filter($this->env, $_galleryId_, "html", null, true);
            echo "\" type=\"hidden\"/>
                <input name=\"action\" value=\"grid-gallery\" type=\"hidden\"/>
                <input name=\"route[module]\" value=\"photos\" type=\"hidden\"/>
                <input name=\"route[action]\" value=\"updateAttachment\" type=\"hidden\"/>
            </form>
        </td>
        <td class=\"date column-date\" style=\"text-align: center;\">";
            // line 370
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_image_, "gg_attachment_wp_date", array()), "html", null, true);
            echo "</td>
    </tr>
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
        return "@ui/type.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1248 => 370,  1238 => 364,  1233 => 363,  1228 => 362,  1223 => 361,  1217 => 357,  1207 => 355,  1198 => 354,  1190 => 350,  1183 => 347,  1180 => 346,  1172 => 345,  1167 => 344,  1162 => 341,  1143 => 339,  1138 => 338,  1135 => 337,  1133 => 326,  1124 => 324,  1119 => 323,  1115 => 321,  1106 => 319,  1096 => 318,  1088 => 314,  1081 => 311,  1078 => 310,  1070 => 309,  1065 => 308,  1061 => 306,  1055 => 304,  1046 => 303,  1038 => 299,  1033 => 296,  1030 => 295,  1017 => 294,  1012 => 293,  1008 => 291,  1000 => 287,  996 => 285,  993 => 284,  988 => 282,  985 => 281,  981 => 279,  975 => 277,  972 => 276,  969 => 275,  959 => 272,  954 => 271,  947 => 267,  944 => 266,  940 => 264,  937 => 263,  927 => 256,  924 => 255,  920 => 253,  917 => 252,  907 => 245,  901 => 243,  890 => 239,  885 => 238,  879 => 235,  862 => 233,  858 => 232,  852 => 230,  844 => 229,  839 => 228,  835 => 226,  826 => 224,  818 => 220,  813 => 217,  810 => 216,  802 => 215,  797 => 214,  786 => 211,  777 => 210,  773 => 209,  768 => 208,  760 => 207,  755 => 206,  750 => 205,  743 => 201,  734 => 199,  726 => 197,  719 => 196,  712 => 195,  705 => 194,  698 => 193,  691 => 192,  684 => 191,  677 => 190,  670 => 189,  665 => 188,  657 => 187,  650 => 184,  644 => 182,  638 => 181,  635 => 180,  632 => 179,  628 => 178,  625 => 177,  622 => 176,  619 => 175,  616 => 174,  613 => 173,  609 => 172,  605 => 171,  602 => 170,  597 => 169,  587 => 166,  579 => 165,  564 => 161,  561 => 160,  547 => 159,  528 => 155,  524 => 153,  518 => 151,  512 => 149,  509 => 148,  503 => 146,  493 => 140,  487 => 139,  474 => 130,  465 => 126,  454 => 122,  446 => 121,  439 => 118,  433 => 117,  421 => 116,  399 => 109,  393 => 107,  388 => 106,  376 => 102,  373 => 101,  370 => 100,  366 => 99,  363 => 98,  360 => 97,  357 => 96,  354 => 95,  351 => 94,  347 => 93,  343 => 92,  340 => 91,  335 => 90,  326 => 85,  320 => 84,  308 => 83,  286 => 76,  280 => 74,  271 => 69,  257 => 60,  248 => 55,  242 => 54,  230 => 53,  214 => 50,  203 => 48,  198 => 47,  195 => 46,  184 => 44,  179 => 43,  176 => 42,  173 => 41,  161 => 40,  144 => 36,  138 => 35,  136 => 34,  124 => 32,  117 => 31,  106 => 29,  101 => 28,  94 => 25,  87 => 22,  82 => 19,  75 => 15,  69 => 12,  63 => 9,  56 => 4,  53 => 3,  50 => 2,  36 => 1,  31 => 158,  28 => 115,  25 => 82,  22 => 52,  19 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@ui/type.twig", "/home/celinedo/v2/wp-content/plugins/gallery-by-supsystic/src/GridGallery/Ui/views/type.twig");
    }
}
