<?php

/* LyraAdminBundle::layout.html.twig */
class __TwigTemplate_29f68d8bba591c676c761a5b48ed7e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('javascripts', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "LyraAdminBundle";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "            ";
        $this->env->loadTemplate("LyraAdminBundle:Admin:jquery_js.html.twig")->display($context);
        // line 8
        echo "        ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            ";
        $this->env->loadTemplate("LyraAdminBundle:Admin:theme_css.html.twig")->display($context);
        // line 11
        echo "            ";
        $this->env->loadTemplate("LyraAdminBundle:Admin:custom_css.html.twig")->display($context);
        // line 12
        echo "        ";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "        ";
    }

    public function getTemplateName()
    {
        return "LyraAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return true;
    }
}
