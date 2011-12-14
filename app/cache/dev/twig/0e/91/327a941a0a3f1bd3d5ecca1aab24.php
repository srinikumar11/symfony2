<?php

/* LyraAdminBundle:Admin:custom_css.html.twig */
class __TwigTemplate_0e91327a941a0a3f1bd3d5ecca1aab24 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lyraadmin/css/admin.css"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "LyraAdminBundle:Admin:custom_css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
