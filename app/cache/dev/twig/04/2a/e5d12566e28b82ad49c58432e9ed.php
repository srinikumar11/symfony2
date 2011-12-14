<?php

/* LyraAdminBundle:Admin:batch_dialog.html.twig */
class __TwigTemplate_042ae5d12566e28b82ad49c58432e9ed extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice($this->getAttribute($this->getContext($context, "dialog"), "message"), twig_length_filter($this->env, $this->getContext($context, "ids")), array(), "LyraAdminBundle"), "html", null, true);
        echo "</p>
    <form id=\"ly-form\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((($this->getAttribute($this->getContext($context, "dialog"), "routePrefix") . "_") . "object"), $this->getAttribute($this->getContext($context, "dialog"), "routeParams")), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"batch_action\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dialog"), "action"), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"batch_confirm\" value=\"1\" />
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ids"));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 13
            echo "        <input type=\"hidden\" name=\"ids[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "    <input type=\"hidden\" name=\"_token\" value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf"), "html", null, true);
        echo "\" />
    <hr class=\"clear\" />
    <input type=\"submit\" name =\"action[batch]\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dialog.submit", array(), "LyraAdminBundle"), "html", null, true);
        echo "\" />
    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute($this->getContext($context, "dialog"), "routePrefix") . "_index")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dialog.cancel", array(), "LyraAdminBundle"), "html", null, true);
        echo "</a>
    </form>
";
    }

    public function getTemplateName()
    {
        return "LyraAdminBundle:Admin:batch_dialog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
