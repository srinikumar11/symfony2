<?php

/* LyraAdminBundle:Admin:index.html.twig */
class __TwigTemplate_4dfe17f48a1b6e4dee8e4fc3328b99b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'list_title' => array($this, 'block_list_title'),
            'search_actions' => array($this, 'block_search_actions'),
            'list_actions' => array($this, 'block_list_actions'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'table_head_sort' => array($this, 'block_table_head_sort'),
            'table_head' => array($this, 'block_table_head'),
            'table_pagination' => array($this, 'block_table_pagination'),
            'table_foot' => array($this, 'block_table_foot'),
            'table_data_batch' => array($this, 'block_table_data_batch'),
            'table_data_field' => array($this, 'block_table_data_field'),
            'table_object_actions' => array($this, 'block_table_object_actions'),
            'table_body' => array($this, 'block_table_body'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'filter' => array($this, 'block_filter'),
            'batch_message' => array($this, 'block_batch_message'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LyraAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["__internal_4dfe17f48a1b6e4dee8e4fc3328b99b2_1"] = $this->env->loadTemplate("LyraAdminBundle:Admin:macros.html.twig");
        // line 3
        $context["list"] = $this->getContext($context, "renderer");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_list_title($context, array $blocks = array())
    {
        // line 7
        echo "        <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "list"), "title"), array(), $this->getAttribute($this->getContext($context, "list"), "transDomain")), "html", null, true);
        echo "</h1>
    ";
    }

    // line 9
    public function block_search_actions($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "filter"), "hasFields")) {
            // line 11
            echo "    <div class=\"search-actions\">
        <a href=\"#filter\" class=\"button ui-icon-search\">";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list.action.search", array(), "LyraAdminBundle"), "html", null, true);
            echo "</a>
        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute($this->getContext($context, "filter"), "routePrefix") . "_filter"), array("reset" => "reset")), "html", null, true);
            echo "\" class=\"button ui-icon-arrowrefresh-1-e\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("filter.button.reset", array(), "LyraAdminBundle"), "html", null, true);
            echo "</a>
    </div>
    ";
        }
        // line 16
        echo "    ";
    }

    // line 17
    public function block_list_actions($context, array $blocks = array())
    {
        // line 18
        echo "        <div class=\"list-actions\">
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "list"), "listActions"));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 20
            echo "            ";
            $context["act"] = $this->getAttribute($this->getAttribute($this->getContext($context, "list"), "actions"), $this->getContext($context, "action"), array(), "array");
            // line 21
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((($this->getAttribute($this->getContext($context, "list"), "routePrefix") . "_") . $this->getContext($context, "action"))), "html", null, true);
            echo "\" class=\"button action-";
            echo twig_escape_filter($this->env, $this->getContext($context, "action"), "html", null, true);
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "act"), "icon")) ? ((" ui-icon-" . $this->getAttribute($this->getContext($context, "act"), "icon"))) : ("")), "html", null, true);
            echo (($this->getAttribute($this->getContext($context, "act", true), "dialog", array(), "any", true, true)) ? (" dialog") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getContext($context, "act", true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "act", true), "text"), (($this->getAttribute($this->getContext($context, "list"), "name") . ".list.action.") . $this->getContext($context, "action")))) : ((($this->getAttribute($this->getContext($context, "list"), "name") . ".list.action.") . $this->getContext($context, "action")))), array(), (($this->getAttribute($this->getContext($context, "act", true), "trans_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "act", true), "trans_domain"), $this->getAttribute($this->getContext($context, "list"), "transDomain"))) : ($this->getAttribute($this->getContext($context, "list"), "transDomain")))), "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "        </div>
    ";
    }

    // line 26
    public function block_flash_messages($context, array $blocks = array())
    {
        // line 27
        echo "        <div class=\"flash-messages\">
            ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 29
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "\">
                ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "message"), array(), $this->getAttribute($this->getContext($context, "list"), "transDomain")), "html", null, true);
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "        </div>
    ";
    }

    // line 44
    public function block_table_head_sort($context, array $blocks = array())
    {
        // line 45
        echo "                                ";
        if ($this->getAttribute($this->getContext($context, "col"), "sortable")) {
            // line 46
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute($this->getContext($context, "list"), "routePrefix") . "_index"), twig_array_merge($this->getAttribute($this->getContext($context, "list"), "routeParams"), array("page" => 1, "field" => $this->getAttribute($this->getContext($context, "col"), "name"), "order" => (($this->getAttribute($this->getContext($context, "col"), "sorted")) ? (((($this->getAttribute($this->getAttribute($this->getContext($context, "list"), "sort"), "order") == "asc")) ? ("desc") : ("asc"))) : ("asc"))))), "html", null, true);
            echo "\">
                                    ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "col"), "label"), array(), $this->getAttribute($this->getContext($context, "list"), "transDomain")), "html", null, true);
            echo "
                                    </a>
                                ";
        } else {
            // line 50
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "col"), "label"), array(), $this->getAttribute($this->getContext($context, "list"), "transDomain")), "html", null, true);
            echo "
                                ";
        }
        // line 52
        echo "                            ";
    }

    // line 37
    public function block_table_head($context, array $blocks = array())
    {
        // line 38
        echo "                <tr>
                    ";
        // line 39
        if ($this->getAttribute($this->getContext($context, "list"), "hasBatchActions")) {
            // line 40
            echo "                        <th class=\"batch-select-all\"><input type=\"checkbox\" /></th>
                    ";
        }
        // line 42
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "list"), "columns"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 43
            echo "                        <th ";
            echo $this->getAttribute($this->getContext($context, "col"), "th_class");
            echo ">
                            ";
            // line 44
            $this->displayBlock('table_head_sort', $context, $blocks);
            // line 53
            echo "                        </th>
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 55
        echo "                    ";
        // line 56
        echo "                    <th class=\"object-actions\">
                        ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list.actions", array(), "LyraAdminBundle"), "html", null, true);
        echo "
                    </th>
                </tr>
            ";
    }

    // line 64
    public function block_table_pagination($context, array $blocks = array())
    {
        // line 65
        echo "                <tr>
                    <td colspan=\"";
        // line 66
        echo twig_escape_filter($this->env, ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "list"), "columns")) + (($this->getAttribute($this->getContext($context, "list"), "hasBatchActions")) ? (1) : (0))) + 1), "html", null, true);
        echo "\">
                    ";
        // line 67
        if (($this->getAttribute($this->getContext($context, "list"), "nbPages") > 1)) {
            // line 68
            echo "                        <span class=\"pagination\">      
                            <span class=\"info\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pagination.info", array("%page%" => $this->getAttribute($this->getContext($context, "list"), "page"), "%count%" => $this->getAttribute($this->getContext($context, "list"), "nbPages")), "LyraAdminBundle"), "html", null, true);
            echo "</span>
                            ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["__internal_4dfe17f48a1b6e4dee8e4fc3328b99b2_1"], "page_link", array($this->getContext($context, "list"), "first", 1, ), "method"), "html", null, true);
            echo "
                            ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["__internal_4dfe17f48a1b6e4dee8e4fc3328b99b2_1"], "page_link", array($this->getContext($context, "list"), "prev", $this->getAttribute($this->getContext($context, "list"), "prevPage"), ), "method"), "html", null, true);
            echo "
                            ";
            // line 72
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "list"), "pageLinks"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 73
                echo "                                ";
                if (($this->getContext($context, "p") == $this->getAttribute($this->getContext($context, "list"), "page"))) {
                    // line 74
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 76
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["__internal_4dfe17f48a1b6e4dee8e4fc3328b99b2_1"], "page_link", array($this->getContext($context, "list"), "page", $this->getContext($context, "p"), ), "method"), "html", null, true);
                    echo "
                                ";
                }
                // line 78
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 79
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["__internal_4dfe17f48a1b6e4dee8e4fc3328b99b2_1"], "page_link", array($this->getContext($context, "list"), "next", $this->getAttribute($this->getContext($context, "list"), "nextPage"), ), "method"), "html", null, true);
            echo "
                            ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["__internal_4dfe17f48a1b6e4dee8e4fc3328b99b2_1"], "page_link", array($this->getContext($context, "list"), "last", $this->getAttribute($this->getContext($context, "list"), "nbPages"), ), "method"), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 83
        echo "                    </td>
                </tr>
            ";
    }

    // line 62
    public function block_table_foot($context, array $blocks = array())
    {
        // line 63
        echo "        <tfoot>
            ";
        // line 64
        $this->displayBlock('table_pagination', $context, $blocks);
        // line 86
        echo "        </tfoot>
        ";
    }

    // line 94
    public function block_table_data_batch($context, array $blocks = array())
    {
        // line 95
        echo "                                    <input class=\"batch-select\" type=\"checkbox\" name=\"ids[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "id"), "html", null, true);
        echo "\" />
                                ";
    }

    // line 102
    public function block_table_data_field($context, array $blocks = array())
    {
        // line 103
        echo "                                    ";
        if (($this->getAttribute($this->getContext($context, "col"), "type") == "boolean")) {
            // line 104
            echo "                                        <input class=\"button icon-only ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "list"), "booleanIcon", array($this->getAttribute($this->getContext($context, "col"), "name"), $this->getContext($context, "object"), ), "method"), "html", null, true);
            echo "\" type=\"submit\" name=\"action[";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "list"), "booleanAction", array($this->getAttribute($this->getContext($context, "col"), "name"), $this->getContext($context, "object"), ), "method"), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "id"), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("list.action.boolean." . $this->getAttribute($this->getContext($context, "list"), "booleanText", array($this->getAttribute($this->getContext($context, "col"), "name"), $this->getContext($context, "object"), ), "method")), array(), "LyraAdminBundle"), "html", null, true);
            echo "\" />
                                    ";
        } elseif (($this->getAttribute($this->getContext($context, "col"), "type") == "template")) {
            // line 106
            echo "                                        ";
            $template = $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "col"), "template"));
            $template->display($context);
            // line 107
            echo "                                    ";
        } else {
            // line 108
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "list"), "colValue", array($this->getAttribute($this->getContext($context, "col"), "name"), $this->getContext($context, "object"), ), "method"), "html", null, true);
            echo "
                                    ";
        }
        // line 110
        echo "                                ";
    }

    // line 115
    public function block_table_object_actions($context, array $blocks = array())
    {
        // line 116
        echo "                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "list"), "objectActions"));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 117
            echo "                                    ";
            $context["act"] = $this->getAttribute($this->getAttribute($this->getContext($context, "list"), "actions"), $this->getContext($context, "action"), array(), "array");
            // line 118
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((($this->getAttribute($this->getContext($context, "list"), "routePrefix") . "_") . $this->getContext($context, "action")), array("id" => $this->getAttribute($this->getContext($context, "object"), "id"))), "html", null, true);
            echo "\" class=\"button icon-only action-";
            echo twig_escape_filter($this->env, $this->getContext($context, "action"), "html", null, true);
            echo (($this->getAttribute($this->getContext($context, "act", true), "dialog", array(), "any", true, true)) ? (" dialog") : (""));
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "act"), "icon")) ? ((" ui-icon-" . $this->getAttribute($this->getContext($context, "act"), "icon"))) : ("")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getContext($context, "act", true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "act", true), "text"), (($this->getAttribute($this->getContext($context, "list"), "name") . ".list.action.") . $this->getContext($context, "action")))) : ((($this->getAttribute($this->getContext($context, "list"), "name") . ".list.action.") . $this->getContext($context, "action")))), array(), (($this->getAttribute($this->getContext($context, "act", true), "trans_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "act", true), "trans_domain"), $this->getAttribute($this->getContext($context, "list"), "transDomain"))) : ($this->getAttribute($this->getContext($context, "list"), "transDomain")))), "html", null, true);
            echo "</a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 120
        echo "                            ";
    }

    // line 89
    public function block_table_body($context, array $blocks = array())
    {
        // line 90
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "list"), "results"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 91
            echo "                    <tr>
                        ";
            // line 92
            if ($this->getAttribute($this->getContext($context, "list"), "hasBatchActions")) {
                // line 93
                echo "                            <td>
                                ";
                // line 94
                $this->displayBlock('table_data_batch', $context, $blocks);
                // line 97
                echo "                            </td>
                        ";
            }
            // line 99
            echo "
                        ";
            // line 100
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "list"), "columns"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 101
                echo "                            <td ";
                echo $this->getAttribute($this->getContext($context, "col"), "class");
                echo ">
                                ";
                // line 102
                $this->displayBlock('table_data_field', $context, $blocks);
                // line 111
                echo "                            </td>
                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 113
            echo "                        ";
            // line 114
            echo "                        <td>
                            ";
            // line 115
            $this->displayBlock('table_object_actions', $context, $blocks);
            // line 121
            echo "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 124
            echo "                    <tr>
                        <td class=\"no-records\" colspan=\"";
            // line 125
            echo twig_escape_filter($this->env, ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "list"), "columns")) + (($this->getAttribute($this->getContext($context, "list"), "hasBatchActions")) ? (1) : (0))) + 1), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list.message.no_records", array(), "LyraAdminBundle"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 128
        echo "            ";
    }

    // line 131
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 132
        echo "        ";
        if ($this->getAttribute($this->getContext($context, "list"), "hasBatchActions")) {
            // line 133
            echo "            <div class=\"batch-actions\">
                <select name=\"batch_action\">
                    <option value=\"\">";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("batch.action.empty", array(), "LyraAdminBundle"), "html", null, true);
            echo "</option>
                    ";
            // line 136
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "list"), "batchActions"));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 137
                echo "                        ";
                $context["act"] = $this->getAttribute($this->getAttribute($this->getContext($context, "list"), "actions"), $this->getContext($context, "action"), array(), "array");
                // line 138
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "action"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getContext($context, "act", true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "act", true), "text"), (($this->getAttribute($this->getContext($context, "list"), "name") . ".batch.action.") . $this->getContext($context, "action")))) : ((($this->getAttribute($this->getContext($context, "list"), "name") . ".batch.action.") . $this->getContext($context, "action")))), array(), (($this->getAttribute($this->getContext($context, "act", true), "trans_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "act", true), "trans_domain"), $this->getAttribute($this->getContext($context, "list"), "transDomain"))) : ($this->getAttribute($this->getContext($context, "list"), "transDomain")))), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 140
            echo "                </select>
                <input type=\"submit\" name=\"action[batch]\" value=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("batch.form.submit", array(), "LyraAdminBundle"), "html", null, true);
            echo "\" />
            </div>
        ";
        }
        // line 144
        echo "    ";
    }

    // line 147
    public function block_filter($context, array $blocks = array())
    {
        // line 148
        echo "        ";
        $this->env->loadTemplate("LyraAdminBundle:Admin:filter_form.html.twig")->display($context);
        // line 149
        echo "    ";
    }

    // line 151
    public function block_batch_message($context, array $blocks = array())
    {
        // line 152
        echo "    <script type=\"text/javascript\">
        var batchMessages = { 
            'noSelection' : '";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("batch.message.no_selection", array(), "LyraAdminBundle"), "html", null, true);
        echo "',
            'noAction' : '";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("batch.message.no_action", array(), "LyraAdminBundle"), "html", null, true);
        echo "'
        }
    </script>
";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"ly-list-wrapper\">
    ";
        // line 6
        $this->displayBlock('list_title', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('search_actions', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('list_actions', $context, $blocks);
        // line 25
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute($this->getContext($context, "list"), "routePrefix") . "_object"), $this->getAttribute($this->getContext($context, "list"), "routeParams")), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 26
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 35
        echo "    <table class=\"ly-list ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "list"), "name"), "html", null, true);
        echo "\">
        <thead>
            ";
        // line 37
        $this->displayBlock('table_head', $context, $blocks);
        // line 61
        echo "        </thead>
        ";
        // line 62
        $this->displayBlock('table_foot', $context, $blocks);
        // line 88
        echo "        <tbody>
            ";
        // line 89
        $this->displayBlock('table_body', $context, $blocks);
        // line 129
        echo "        </tbody>
    </table>
    ";
        // line 131
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 145
        echo "    <input type=\"hidden\" name=\"_token\" value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf"), "html", null, true);
        echo "\" />
    </form>
    ";
        // line 147
        $this->displayBlock('filter', $context, $blocks);
        // line 150
        echo "</div>
";
        // line 151
        $this->displayBlock('batch_message', $context, $blocks);
    }

    // line 161
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 162
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lyraadmin/css/list.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lyraadmin/css/lyra_select.css"), "html", null, true);
        echo "\" />
";
    }

    // line 166
    public function block_javascripts($context, array $blocks = array())
    {
        // line 167
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lyraadmin/js/list.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lyraadmin/js/lyra_select.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "LyraAdminBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
