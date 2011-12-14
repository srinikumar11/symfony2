<?php

/* LyraAdminBundle:Admin:macros.html.twig */
class __TwigTemplate_effc6a653166ff6a0f055b294eedccab extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getpage_link($list = null, $type = null, $page = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "list" => $list,
            "type" => $type,
            "page" => $page,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context["disabled"] = ((twig_in_filter($this->getContext($context, "type"), array(0 => "first", 1 => "prev")) && ($this->getAttribute($this->getContext($context, "list"), "page") == 1)) || (twig_in_filter($this->getContext($context, "type"), array(0 => "last", 1 => "next")) && ($this->getAttribute($this->getContext($context, "list"), "page") == $this->getAttribute($this->getContext($context, "list"), "nbPages"))));
            // line 3
            $context["icon"] = array("first" => "ui-icon-arrowthickstop-1-w", "prev" => "ui-icon-arrowthick-1-w", "next" => "ui-icon-arrowthick-1-e", "last" => "ui-icon-arrowthickstop-1-e", "page" => "");
            // line 4
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute($this->getContext($context, "list"), "routePrefix") . "_index"), twig_array_merge($this->getAttribute($this->getContext($context, "list"), "routeParams"), array("page" => $this->getContext($context, "page")))), "html", null, true);
            echo "\" class=\"button icon-only ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "icon"), $this->getContext($context, "type"), array(), "array"), "html", null, true);
            echo (($this->getContext($context, "disabled")) ? (" disabled") : (""));
            echo "\">
    ";
            // line 5
            if (($this->getContext($context, "type") == "page")) {
                // line 6
                echo "        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo " 
    ";
            } else {
                // line 8
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("pagination." . $this->getContext($context, "type")), array(), "LyraAdminBundle"), "html", null, true);
                echo "
    ";
            }
            // line 10
            echo "</a>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "LyraAdminBundle:Admin:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
