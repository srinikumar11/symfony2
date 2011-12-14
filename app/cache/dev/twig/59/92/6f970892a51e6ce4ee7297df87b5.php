<?php

/* LyraAdminBundle:Admin:theme_css.html.twig */
class __TwigTemplate_59926f970892a51e6ce4ee7297df87b5 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute($this->getContext($context, "renderer"), "theme") . "/jquery-ui.custom.css")), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "LyraAdminBundle:Admin:theme_css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
