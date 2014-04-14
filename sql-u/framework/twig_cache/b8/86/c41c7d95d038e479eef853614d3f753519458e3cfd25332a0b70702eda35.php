<?php

/* admin/users_edit_list.html */
class __TwigTemplate_b886c41c7d95d038e479eef853614d3f753519458e3cfd25332a0b70702eda35 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"users-edit-list-modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
\t  <div class=\"modal-header\">
\t    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t<h4 class=\"modal-title\" id=\"users-edit-list-modal\">";
        // line 6
        echo twig_escape_filter($this->env, trans("EDIT_USERS"), "html", null, true);
        echo "</h4>
\t  </div>
\t  <div class=\"modal-body\">
\t    <table class=\"table\">
\t\t  <tr>
\t\t    <th>#</th>
\t\t\t<th>";
        // line 12
        echo twig_escape_filter($this->env, trans("EMAIL_ADDRESS"), "html", null, true);
        echo "</th>
\t\t  </tr>
\t\t  ";
        // line 14
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_users_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "\t\t  <tr>
\t\t    <td>";
            // line 16
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
            echo "</td>
\t\t\t<td><a href=\"#\">";
            // line 17
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "email"), "html", null, true);
            echo "</a></td>
\t\t  </tr>
\t\t  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 20
            echo "\t\t  <tr>
\t\t    <td></td>
\t\t    <td>";
            // line 22
            echo twig_escape_filter($this->env, trans("NO_USERS_FOUND"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</table>
\t  </div>
\t  <div class=\"modal-footer\">
\t    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 28
        echo twig_escape_filter($this->env, trans("CLOSE"), "html", null, true);
        echo "</button>
\t  </div>
\t</div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/users_edit_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  63 => 20,  54 => 17,  46 => 15,  35 => 12,  169 => 71,  160 => 70,  150 => 65,  146 => 64,  142 => 63,  131 => 55,  121 => 48,  116 => 46,  109 => 42,  104 => 40,  97 => 36,  92 => 34,  85 => 30,  80 => 28,  73 => 24,  68 => 22,  62 => 18,  49 => 16,  44 => 15,  40 => 14,  34 => 11,  26 => 6,  39 => 9,  37 => 8,  31 => 5,  27 => 4,  23 => 3,  145 => 64,  143 => 63,  138 => 62,  133 => 61,  123 => 53,  120 => 52,  115 => 51,  112 => 50,  106 => 48,  103 => 47,  93 => 45,  90 => 44,  81 => 28,  75 => 35,  71 => 34,  67 => 22,  55 => 24,  43 => 16,  36 => 13,  30 => 10,  19 => 1,);
    }
}
