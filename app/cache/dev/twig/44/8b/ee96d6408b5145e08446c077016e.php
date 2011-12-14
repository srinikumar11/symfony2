<?php

/* LyraAdminBundle:Admin:form.html.twig */
class __TwigTemplate_448bee96d6408b5145e08446c077016e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'form_title' => array($this, 'block_form_title'),
            'form_actions' => array($this, 'block_form_actions'),
            'form' => array($this, 'block_form'),
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
        // line 2
        $context["form"] = $this->getContext($context, "renderer");
        // line 3
        echo $this->env->getExtension('form')->setTheme($this->getAttribute($this->getContext($context, "form"), "view"), array("LyraAdminBundle:Admin:form_theme.html.twig", ));
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_form_title($context, array $blocks = array())
    {
        // line 7
        echo "        <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "form"), "title"), array(), $this->getAttribute($this->getContext($context, "form"), "transDomain")), "html", null, true);
        echo "</h1>   
    ";
    }

    // line 9
    public function block_form_actions($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"form-actions\">
        <a class=\"button ui-icon-arrowthick-1-w action-back\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute($this->getContext($context, "form"), "routePrefix") . "_index")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.action.back", array(), "LyraAdminBundle"), "html", null, true);
        echo "</a>
    </div>
    ";
    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
        // line 15
        echo "        <form class=\"ly-form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((($this->getAttribute($this->getContext($context, "form"), "routePrefix") . "_") . $this->getAttribute($this->getContext($context, "form"), "action")), $this->getAttribute($this->getContext($context, "form"), "routeParams")), "html", null, true);
        echo "\" method=\"post\">
            <div id=\"column-1\">
            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 18
            echo "                <fieldset>
                ";
            // line 19
            if ($this->getAttribute($this->getContext($context, "group"), "caption")) {
                // line 20
                echo "                    <legend>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "caption"), array(), $this->getAttribute($this->getContext($context, "form"), "transDomain")), "html", null, true);
                echo "</legend>
                ";
            }
            // line 22
            echo "                <ol>
                ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 24
                echo "                    ";
                $context["fld"] = (((!$this->getAttribute($this->getContext($context, "group", true), "embed", array(), "any", true, true))) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "fields"), $this->getContext($context, "field"), array(), "array")) : (""));
                // line 25
                echo "                    ";
                $context["name"] = ((twig_test_empty($this->getContext($context, "fld"))) ? ($this->getContext($context, "field")) : ($this->getAttribute($this->getContext($context, "fld"), "tag")));
                // line 26
                echo "                    ";
                $context["view"] = $this->getAttribute($this->getContext($context, "form"), "view", array((($this->getAttribute($this->getContext($context, "group", true), "embed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "group", true), "embed"), null)) : (null)), ), "method");
                // line 27
                echo "                    <li>
                    ";
                // line 28
                echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "view"), $this->getContext($context, "name"), array(), "array"));
                echo "
                    ";
                // line 29
                if ((!($this->getAttribute($this->getContext($context, "fld", true), "label", array(), "any", true, true) && twig_test_empty($this->getAttribute($this->getContext($context, "fld"), "label"))))) {
                    // line 30
                    echo "                        ";
                    echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "view"), $this->getContext($context, "name"), array(), "array"), (($this->getAttribute($this->getContext($context, "fld", true), "label", array(), "any", true, true)) ? ($this->getAttribute($this->getContext($context, "fld"), "label")) : (null)));
                    echo "
                    ";
                }
                // line 32
                echo "                    ";
                echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "view"), $this->getContext($context, "name"), array(), "array"));
                echo "
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 35
            echo "                </ol>
                </fieldset>
                ";
            // line 37
            if ($this->getAttribute($this->getContext($context, "group"), "break_after")) {
                // line 38
                echo "                    </div>
                    <div id=\"column-2\">
                ";
            }
            // line 41
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 42
        echo "            </div>
            ";
        // line 43
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "view"), "_token"));
        echo "
            <hr class=\"clear\" />
            <input class=\"button\" type=\"submit\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.submit", array(), "LyraAdminBundle"), "html", null, true);
        echo "\" />
        </form>
    ";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"ly-form-wrapper\">
    ";
        // line 6
        $this->displayBlock('form_title', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('form_actions', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 48
        echo "</div>
";
    }

    // line 50
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 51
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lyraadmin/css/form.css"), "html", null, true);
        echo "\" />
";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lyraadmin/js/form.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "LyraAdminBundle:Admin:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
