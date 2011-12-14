<?php

/* LyraAdminBundle:Admin:dialog.html.twig */
class __TwigTemplate_12d7dce3023bcef371e7a0e174cebc62 extends Twig_Template
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
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")) ? ("LyraAdminBundle:Admin:form_ajax.html.twig") : ("LyraAdminBundle:Admin:form.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dialog"] = $this->getContext($context, "renderer");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_title($context, array $blocks = array())
    {
        // line 4
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "dialog"), "title"), array(), $this->getAttribute($this->getContext($context, "dialog"), "transDomain")), "html", null, true);
        echo "</h1>
";
    }

    // line 6
    public function block_button_bar($context, array $blocks = array())
    {
    }

    // line 7
    public function block_form($context, array $blocks = array())
    {
        // line 8
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "dialog"), "message"), array(), $this->getAttribute($this->getContext($context, "dialog"), "transDomain")), "html", null, true);
        echo "</p>
    <form id=\"ly-form\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((($this->getAttribute($this->getContext($context, "dialog"), "routePrefix") . "_") . $this->getAttribute($this->getContext($context, "dialog"), "action")), $this->getAttribute($this->getContext($context, "dialog"), "routeParams")), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 10
        if (array_key_exists("csrf", $context)) {
            // line 11
            echo "        <input type=\"hidden\" name=\"_token\" value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "csrf"), "html", null, true);
            echo "\" />
    ";
        }
        // line 13
        echo "    <hr class=\"clear\" />
    <input type=\"submit\" name =\"submit\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dialog.submit", array(), "LyraAdminBundle"), "html", null, true);
        echo "\" />
    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute($this->getContext($context, "dialog"), "routePrefix") . "_index")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dialog.cancel", array(), "LyraAdminBundle"), "html", null, true);
        echo "</a>
    </form>
";
    }

    public function getTemplateName()
    {
        return "LyraAdminBundle:Admin:dialog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
