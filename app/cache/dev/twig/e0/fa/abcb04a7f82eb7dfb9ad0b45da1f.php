<?php

/* LyraAdminBundle:Admin:form_theme.html.twig */
class __TwigTemplate_e0faabcb04a7f82eb7dfb9ad0b45da1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'field_label' => array($this, 'block_field_label'),
            'field_errors' => array($this, 'block_field_errors'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field_row($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <li class=\"form-row ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            echo "error";
        }
        echo "\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"));
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    </li>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 12
    public function block_field_label($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), "LyraContentBundle"), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_field_errors($context, array $blocks = array())
    {
        // line 18
        ob_start();
        // line 19
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 20
            echo "    <ul class=\"error-list\">
        ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 22
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 24
            echo "    </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 28
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 29
        ob_start();
        // line 30
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 31
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 33
            echo "            ";
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "date"));
            echo "
            ";
            // line 34
            echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "time"));
            echo "
            ";
            // line 35
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "date"));
            echo "
            ";
            // line 36
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "time"));
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 41
    public function block_date_widget($context, array $blocks = array())
    {
        // line 42
        ob_start();
        // line 43
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 44
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 46
            echo "            ";
            echo strtr($this->getContext($context, "date_pattern"), array("{{ year }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "year")), "{{ month }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "month")), "{{ day }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "day"))));
            // line 50
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 55
    public function block_time_widget($context, array $blocks = array())
    {
        // line 56
        ob_start();
        // line 57
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 58
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 60
            echo "            ";
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "hour"), array("attr" => array("size" => "1")));
            echo ":";
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "minute"), array("attr" => array("size" => "1")));
            if ($this->getContext($context, "with_seconds")) {
                echo ":";
                echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "second"), array("attr" => array("size" => "1")));
            }
            // line 61
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 65
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 66
        ob_start();
        // line 67
        echo "    ";
        if ($this->getContext($context, "expanded")) {
            // line 68
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("class" => "choices-list"));
            // line 69
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 71
                echo "            ";
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "child"));
                echo "
            ";
                // line 72
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "child"));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 74
            echo "        </div>
    ";
        } else {
            // line 76
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 77
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 78
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value")), "html", null, true);
                echo "</option>
        ";
            }
            // line 80
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 81
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 82
                echo "            ";
                $this->displayBlock("widget_choice_options", $context, $blocks);
                echo "
            ";
                // line 83
                if (((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0) && (!(null === $this->getContext($context, "separator"))))) {
                    // line 84
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 86
                echo "        ";
            }
            // line 87
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 88
            echo "        ";
            $this->displayBlock("widget_choice_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "LyraAdminBundle:Admin:form_theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
