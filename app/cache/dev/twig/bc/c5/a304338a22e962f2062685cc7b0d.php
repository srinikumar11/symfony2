<?php

/* LyraAdminBundle:Admin:form_ajax.html.twig */
class __TwigTemplate_bcc5a304338a22e962f2062685cc7b0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'form_title' => array($this, 'block_form_title'),
            'button_bar' => array($this, 'block_button_bar'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (array_key_exists("form", $context)) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('form')->setTheme($this->getContext($context, "form"), array("LyraAdminBundle:Admin:form_theme.html.twig", ));
        }
        // line 4
        echo "<div id=\"ly-form-wrapper\">
    ";
        // line 5
        $this->displayBlock('form_title', $context, $blocks);
        // line 6
        echo "    ";
        $this->displayBlock('button_bar', $context, $blocks);
        // line 7
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 8
        echo "</div>
";
    }

    // line 5
    public function block_form_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_button_bar($context, array $blocks = array())
    {
    }

    // line 7
    public function block_form($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "LyraAdminBundle:Admin:form_ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
