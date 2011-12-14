<?php

/* LyraAdminBundle:Admin:delete.html.twig */
class __TwigTemplate_8134868195fb2c6d2d56cbbe59f320f5 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "dialog"), "title"), array(), "LyraAdminBundle"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice($this->getAttribute($this->getContext($context, "dialog"), "message"), 1, array("%object%" => $this->getContext($context, "object")), "LyraAdminBundle"), "html", null, true);
        echo "</p>
    <form id=\"ly-form\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((($this->getAttribute($this->getContext($context, "dialog"), "routePrefix") . "_") . $this->getAttribute($this->getContext($context, "dialog"), "action")), $this->getAttribute($this->getContext($context, "dialog"), "routeParams")), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf"), "html", null, true);
        echo "\" />
    <hr class=\"clear\" />
    <input type=\"submit\" name =\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dialog.submit", array(), "LyraAdminBundle"), "html", null, true);
        echo "\" />
    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute($this->getContext($context, "dialog"), "routePrefix") . "_index")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dialog.cancel", array(), "LyraAdminBundle"), "html", null, true);
        echo "</a>
    </form>
";
    }

    public function getTemplateName()
    {
        return "LyraAdminBundle:Admin:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
