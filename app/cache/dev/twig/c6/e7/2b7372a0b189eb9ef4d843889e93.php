<?php

/* LyraAdminBundle:Admin:fields.html.twig */
class __TwigTemplate_c6e72b7372a0b189eb9ef4d843889e93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'daterange_widget' => array($this, 'block_daterange_widget'),
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
    public function block_daterange_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <div class=\"daterange-container\">
        <div class=\"daterange-from\">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "from"));
        echo "
            ";
        // line 8
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "from"));
        echo "
            ";
        // line 9
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "from"));
        echo "
        </div>
        <div class=\"daterange-to\">
            ";
        // line 12
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "to"));
        echo "
            ";
        // line 13
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "to"));
        echo "
            ";
        // line 14
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "to"));
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "LyraAdminBundle:Admin:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
