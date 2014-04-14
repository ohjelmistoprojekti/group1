<?php

/* admin/users.html */
class __TwigTemplate_a7bc310dd50cd83a042f23c572b43a3eb40aa1e85ff7b46446032732facce4d0 extends Twig_Template
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
        echo "<div>
  <ul class=\"nav nav-pills nav-stacked\">
    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#users-add-form-modal\">";
        // line 3
        echo twig_escape_filter($this->env, trans("ADD_USERS"), "html", null, true);
        echo "</a></li>
\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#users-edit-list-modal\">";
        // line 4
        echo twig_escape_filter($this->env, trans("EDIT_USERS"), "html", null, true);
        echo "</a></li>
\t<li><a href=\"#\">";
        // line 5
        echo twig_escape_filter($this->env, trans("DELETE_USERS"), "html", null, true);
        echo "</a></li>
  </ul>
</div>
";
        // line 8
        $this->env->loadTemplate("admin/users_add_form.html")->display($context);
        // line 9
        $this->env->loadTemplate("admin/users_edit_list.html")->display($context);
    }

    public function getTemplateName()
    {
        return "admin/users.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  37 => 8,  31 => 5,  27 => 4,  23 => 3,  145 => 64,  143 => 63,  138 => 62,  133 => 61,  123 => 53,  120 => 52,  115 => 51,  112 => 50,  106 => 48,  103 => 47,  93 => 45,  90 => 44,  81 => 38,  75 => 35,  71 => 34,  67 => 33,  55 => 24,  43 => 16,  36 => 13,  30 => 10,  19 => 1,);
    }
}
