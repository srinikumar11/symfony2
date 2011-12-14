<?php

/* SriniBlogBundle:Default:index.html.twig */
class __TwigTemplate_67744b78a9da2ab28305f362652b920e extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "SriniBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
