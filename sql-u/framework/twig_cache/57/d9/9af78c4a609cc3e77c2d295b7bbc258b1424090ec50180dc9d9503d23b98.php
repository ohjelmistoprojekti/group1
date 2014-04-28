<?php

/* admin/groups.html */
class __TwigTemplate_57d99af78c4a609cc3e77c2d295b7bbc258b1424090ec50180dc9d9503d23b98 extends Twig_Template
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
        $this->env->loadTemplate("admin/groups_add_form.html")->display($context);
        // line 2
        $this->env->loadTemplate("admin/groups_edit_list.html")->display($context);
        // line 3
        $this->env->loadTemplate("admin/groups_edit_form.html")->display($context);
        // line 4
        $this->env->loadTemplate("admin/groups_delete_list.html")->display($context);
        // line 5
        echo "<div>
  <ul class=\"nav nav-pills nav-stacked\">
    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#groups-add-form-modal\">";
        // line 7
        echo twig_escape_filter($this->env, trans("ADD_GROUPS"), "html", null, true);
        echo "</a></li>
\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#groups-edit-list-modal\">";
        // line 8
        echo twig_escape_filter($this->env, trans("EDIT_GROUPS"), "html", null, true);
        echo "</a></li>
\t<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#groups-delete-list-modal\">";
        // line 9
        echo twig_escape_filter($this->env, trans("DELETE_GROUPS"), "html", null, true);
        echo "</a></li>
  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/groups.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  35 => 8,  31 => 7,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
