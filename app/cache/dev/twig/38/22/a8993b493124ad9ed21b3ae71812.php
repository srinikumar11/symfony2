<?php

/* AcmeClassifiedsBundle:Default:index.html.twig */
class __TwigTemplate_3822a8993b493124ad9ed21b3ae71812 extends Twig_Template
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
        return "AcmeClassifiedsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
