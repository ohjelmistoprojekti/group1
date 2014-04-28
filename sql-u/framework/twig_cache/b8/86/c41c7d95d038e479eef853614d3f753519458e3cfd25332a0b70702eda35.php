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
\t\t<h4 class=\"modal-title\">";
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
\t\t\t<td><a class=\"user-edit-anchor\" href=\"admin.php?users&edit&id=";
            // line 17
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
            echo "\">";
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
</div>
";
    }

    // line 33
    public function getscript()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "
\t\$( 'a.user-edit-anchor' ).click( function( e ) {
\t
\t\te.preventDefault();
\t\t
\t\t\$( '#users-edit-list-modal' ).modal( 'hide' );
\t\t
\t\twindow.location = \$( this ).attr( 'href' );

\t} );
\t
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
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
        return array (  103 => 34,  94 => 33,  84 => 28,  79 => 25,  70 => 22,  66 => 20,  54 => 17,  49 => 16,  46 => 15,  40 => 14,  209 => 78,  205 => 76,  202 => 75,  199 => 74,  188 => 73,  178 => 68,  174 => 67,  163 => 59,  153 => 52,  148 => 50,  141 => 46,  136 => 44,  126 => 40,  121 => 38,  111 => 34,  106 => 32,  98 => 28,  93 => 26,  87 => 22,  81 => 21,  71 => 19,  61 => 17,  56 => 16,  51 => 15,  47 => 14,  41 => 11,  35 => 12,  26 => 6,  19 => 1,);
    }
}
