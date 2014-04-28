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
        $this->env->loadTemplate("admin/users_add_form.html")->display($context);
        // line 2
        $this->env->loadTemplate("admin/users_edit_form.html")->display($context);
        // line 3
        $this->env->loadTemplate("admin/users_edit_list.html")->display($context);
        // line 4
        $this->env->loadTemplate("admin/users_delete_list.html")->display($context);
        // line 5
        echo "<div>
  <ul class=\"nav nav-pills nav-stacked\">
    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#users-add-form-modal\">";
        // line 7
        echo twig_escape_filter($this->env, trans("ADD_USERS"), "html", null, true);
        echo "</a></li>
\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#users-edit-list-modal\">";
        // line 8
        echo twig_escape_filter($this->env, trans("EDIT_USERS"), "html", null, true);
        echo "</a></li>
\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#users-delete-list-modal\">";
        // line 9
        echo twig_escape_filter($this->env, trans("DELETE_USERS"), "html", null, true);
        echo "</a></li>
  </ul>
</div>";
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
        return array (  39 => 9,  35 => 8,  31 => 7,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  183 => 75,  177 => 73,  172 => 72,  166 => 71,  160 => 70,  157 => 69,  154 => 68,  151 => 67,  148 => 66,  145 => 65,  138 => 62,  133 => 61,  123 => 53,  120 => 52,  115 => 51,  112 => 50,  106 => 48,  103 => 47,  93 => 45,  90 => 44,  81 => 38,  75 => 35,  71 => 34,  67 => 33,  55 => 24,  43 => 16,  36 => 13,  30 => 10,  19 => 1,);
    }
}
