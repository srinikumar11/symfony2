<?php

/* LyraAdminBundle:Admin:filter_form.html.twig */
class __TwigTemplate_dabbd3a87581097c75a97738689d0be6 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute($this->getContext($context, "filter"), "hasFields")) {
            // line 2
            $context["view"] = $this->getAttribute($this->getContext($context, "filter"), "view", array(), "method");
            // line 3
            echo $this->env->getExtension('form')->setTheme($this->getContext($context, "view"), array("LyraAdminBundle:Admin:form_theme.html.twig", ));
            // line 4
            echo "<div id=\"ly-filter-wrapper\">
    <h2>";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "filter"), "title"), array(), $this->getAttribute($this->getContext($context, "filter"), "transDomain")), "html", null, true);
            echo "</h2>
    <form class=\"ly-form-filter\" action=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute($this->getContext($context, "filter"), "routePrefix") . "_filter")), "html", null, true);
            echo "\" method=\"post\">
    <ol>
    ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "filter"), "filterFields"));
            foreach ($context['_seq'] as $context["field"] => $context["attrs"]) {
                // line 9
                echo "        <li>
        ";
                // line 10
                echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "view"), $this->getContext($context, "field"), array(), "array"));
                echo "
        ";
                // line 11
                if ((!($this->getAttribute($this->getContext($context, "attrs", true), "label", array(), "any", true, true) && twig_test_empty($this->getAttribute($this->getContext($context, "attrs"), "label"))))) {
                    // line 12
                    echo "            ";
                    echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "view"), $this->getContext($context, "field"), array(), "array"), (($this->getAttribute($this->getContext($context, "attrs", true), "label", array(), "any", true, true)) ? ($this->getAttribute($this->getContext($context, "attrs"), "label")) : (null)));
                    echo "
        ";
                }
                // line 14
                echo "        ";
                echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "view"), $this->getContext($context, "field"), array(), "array"));
                echo "
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['attrs'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 17
            echo "    </ol>
    <input type=\"submit\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("filter.button.submit", array(), "LyraAdminBundle"), "html", null, true);
            echo "\" />
    </form>
</div>
";
        }
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "LyraAdminBundle:Admin:filter_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
