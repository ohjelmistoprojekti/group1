<?php

/* admin/users_delete_list.html */
class __TwigTemplate_71de8ca05e8f164714d4e542e9cddb066c4f1db9f0a56e4b65ea4b9bbc5dacb3 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"users-delete-list-modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
\t  <div class=\"modal-header\">
\t    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t<h4 class=\"modal-title\" id=\"users-delete-list-modal\">";
        // line 6
        echo twig_escape_filter($this->env, trans("DELETE_USERS"), "html", null, true);
        echo "</h4>
\t  </div>
\t  <div class=\"modal-body\">
\t    <form id=\"delete_users_form\" action=\"admin.php?users&amp;delete\" method=\"post\">
\t    <table class=\"table\">
\t\t  <tr>
\t\t    <th></th>
\t\t    <th>#</th>
\t\t\t<th>";
        // line 14
        echo twig_escape_filter($this->env, trans("EMAIL_ADDRESS"), "html", null, true);
        echo "</th>
\t\t  </tr>
\t\t  ";
        // line 16
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_users_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 17
            echo "\t\t  <tr>
\t\t    <td><input type=\"checkbox\" value=\"";
            // line 18
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
            echo "\" name=\"user_id[]\"></td>
\t\t    <td>";
            // line 19
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 20
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "email"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t\t  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "\t\t  <tr>
\t\t    <td></td>
\t\t    <td></td>
\t\t    <td>";
            // line 26
            echo twig_escape_filter($this->env, trans("NO_USERS_FOUND"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t</table>
\t\t</form>
\t  </div>
\t  <div class=\"modal-footer\">
\t    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 33
        echo twig_escape_filter($this->env, trans("CLOSE"), "html", null, true);
        echo "</button>
\t\t<button type=\"button\" id=\"delete_users\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
        // line 34
        echo twig_escape_filter($this->env, trans("DELETE"), "html", null, true);
        echo "</button>
\t  </div>
\t</div>
  </div>
</div>
";
    }

    // line 39
    public function getscript()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 40
            echo "
\t\$( '#delete_users' ).click( function( e ) {
\t
\t\te.preventDefault();
\t\t\$( '#delete_users_form' ).submit();
\t
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
        return "admin/users_delete_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  104 => 39,  61 => 20,  56 => 19,  51 => 18,  48 => 17,  42 => 16,  37 => 14,  94 => 34,  84 => 29,  79 => 25,  70 => 23,  66 => 20,  54 => 17,  49 => 16,  46 => 15,  40 => 14,  26 => 6,  39 => 9,  35 => 12,  31 => 7,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  183 => 75,  177 => 73,  172 => 72,  166 => 71,  160 => 70,  157 => 69,  154 => 68,  151 => 67,  148 => 66,  145 => 65,  138 => 62,  133 => 61,  123 => 53,  120 => 52,  115 => 51,  112 => 50,  106 => 48,  103 => 34,  93 => 45,  90 => 33,  81 => 38,  75 => 26,  71 => 34,  67 => 33,  55 => 24,  43 => 16,  36 => 13,  30 => 10,  19 => 1,);
    }
}
