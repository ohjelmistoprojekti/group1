<?php

/* admin/groups_add_form.html */
class __TwigTemplate_b60f83f6b215c30f09e65c90be10fdfc733b5d026a8cfc2c68b2b5c889ccb35b extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"groups-add-form-modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
\t  <div class=\"modal-header\">
\t    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t<h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, trans("ADD_GROUP"), "html", null, true);
        echo "</h4>
\t  </div>
\t  <div class=\"modal-body\">
\t    <form class=\"form-horizontal\" id=\"groups-add-form\" action=\"admin.php?groups&amp;add\" role=\"form\" method=\"post\">
\t\t  <div class=\"form-group\">
\t\t    <label for=\"group_name\" class=\"col-sm-4 control-label\">";
        // line 11
        echo twig_escape_filter($this->env, trans("GROUP_NAME"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <input type=\"text\" class=\"form-control\" id=\"group_name\" name=\"group_name\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, trans("GROUP_NAME"), "html", null, true);
        echo "\">
\t\t    </div>
\t\t  </div>
\t\t</form>
\t  </div>
\t  <div class=\"modal-footer\">
\t    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 19
        echo twig_escape_filter($this->env, trans("CLOSE"), "html", null, true);
        echo "</button>
\t\t<button type=\"button\" id=\"add-group-btn\" class=\"btn btn-primary\">";
        // line 20
        echo twig_escape_filter($this->env, trans("ADD"), "html", null, true);
        echo "</button>
\t  </div>
\t</div>
  </div>
</div>
";
    }

    // line 25
    public function getscript()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "\t
\t\$( '#add-group-btn' ).click( function() {
\t
\t\t\$( '#groups-add-form' ).submit();
\t
\t} );

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "admin/groups_add_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  52 => 20,  48 => 19,  39 => 13,  34 => 11,  26 => 6,  232 => 88,  226 => 86,  223 => 85,  220 => 84,  214 => 82,  209 => 81,  203 => 80,  197 => 79,  194 => 78,  191 => 77,  188 => 76,  185 => 75,  179 => 73,  174 => 72,  168 => 71,  162 => 70,  159 => 69,  156 => 68,  153 => 67,  150 => 66,  145 => 65,  138 => 62,  133 => 61,  123 => 53,  120 => 52,  115 => 51,  112 => 50,  106 => 48,  103 => 47,  93 => 45,  90 => 44,  81 => 38,  75 => 35,  71 => 26,  67 => 33,  55 => 24,  43 => 16,  36 => 13,  30 => 10,  19 => 1,);
    }
}
