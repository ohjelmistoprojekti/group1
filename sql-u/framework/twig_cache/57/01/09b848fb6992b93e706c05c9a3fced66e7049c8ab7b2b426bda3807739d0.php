<?php

/* admin/assignments.html */
class __TwigTemplate_570109b848fb6992b93e706c05c9a3fced66e7049c8ab7b2b426bda3807739d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("admin/assignments_add_form.html")->display($context);
        // line 2
        echo "<div>
  <ul class=\"nav nav-pills nav-stacked\">
    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#assignments-add-form-modal\">";
        // line 4
        echo twig_escape_filter($this->env, trans("ADD_ASSIGNMENTS"), "html", null, true);
        echo "</a></li>
\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#assignments-edit-list-modal\">";
        // line 5
        echo twig_escape_filter($this->env, trans("EDIT_ASSIGNMENTS"), "html", null, true);
        echo "</a></li>
\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#assignments-delete-list-modal\">";
        // line 6
        echo twig_escape_filter($this->env, trans("DELETE_ASSIGNMENTS"), "html", null, true);
        echo "</a></li>
  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/assignments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  29 => 5,  25 => 4,  21 => 2,  232 => 88,  226 => 86,  223 => 85,  220 => 84,  214 => 82,  209 => 81,  203 => 80,  197 => 79,  194 => 78,  191 => 77,  188 => 76,  185 => 75,  179 => 73,  174 => 72,  168 => 71,  162 => 70,  159 => 69,  156 => 68,  153 => 67,  150 => 66,  145 => 65,  138 => 62,  133 => 61,  123 => 53,  120 => 52,  115 => 51,  112 => 50,  106 => 48,  103 => 47,  93 => 45,  90 => 44,  81 => 38,  75 => 35,  71 => 34,  67 => 33,  55 => 24,  43 => 16,  36 => 13,  30 => 10,  19 => 1,);
    }
}
