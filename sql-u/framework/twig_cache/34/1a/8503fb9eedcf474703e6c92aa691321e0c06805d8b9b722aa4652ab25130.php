<?php

/* admin/groups_delete_list.html */
class __TwigTemplate_341a8503fb9eedcf474703e6c92aa691321e0c06805d8b9b722aa4652ab25130 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"groups-delete-list-modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
\t  <div class=\"modal-header\">
\t    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t<h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, trans("DELETE_GROUPS"), "html", null, true);
        echo "</h4>
\t  </div>
\t  <div class=\"modal-body\">
\t    <form id=\"delete_groups_form\" action=\"admin.php?groups&amp;delete\" method=\"post\">
\t    <table class=\"table\">
\t\t  <tr>
\t\t    <th></th>
\t\t    <th>#</th>
\t\t\t<th>";
        // line 14
        echo twig_escape_filter($this->env, trans("GROUP_NAME"), "html", null, true);
        echo "</th>
\t\t  </tr>
\t\t  ";
        // line 16
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_groups_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 17
            echo "\t\t  <tr>
\t\t    <td><input type=\"checkbox\" value=\"";
            // line 18
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "id"), "html", null, true);
            echo "\" name=\"group_id[]\"></td>
\t\t    <td>";
            // line 19
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "id"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 20
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "name"), "html", null, true);
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
            echo twig_escape_filter($this->env, trans("NO_GROUPS_FOUND"), "html", null, true);
            echo "</td>
\t\t  </tr>
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
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
\t\t<button type=\"button\" id=\"delete_groups\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
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
\t\$( '#delete_groups' ).click( function( e ) {
\t
\t\te.preventDefault();
\t\t\$( '#delete_groups_form' ).submit();
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
        return "admin/groups_delete_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  104 => 39,  90 => 33,  75 => 26,  61 => 20,  56 => 19,  51 => 18,  48 => 17,  42 => 16,  37 => 14,  93 => 30,  89 => 28,  86 => 27,  83 => 26,  72 => 25,  62 => 20,  58 => 19,  41 => 11,  103 => 34,  94 => 34,  84 => 29,  79 => 25,  70 => 23,  66 => 20,  54 => 17,  49 => 16,  46 => 13,  40 => 14,  26 => 6,  39 => 9,  35 => 9,  31 => 7,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
