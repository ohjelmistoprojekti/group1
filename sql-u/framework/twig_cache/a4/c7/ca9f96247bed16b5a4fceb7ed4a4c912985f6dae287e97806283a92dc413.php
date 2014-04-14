<?php

/* admin/users_add_form.html */
class __TwigTemplate_a4c7ca9f96247bed16b5a4fceb7ed4a4c912985f6dae287e97806283a92dc413 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"users-add-form-modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
\t  <div class=\"modal-header\">
\t    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t<h4 class=\"modal-title\" id=\"users-add-form-modal\">";
        // line 6
        echo twig_escape_filter($this->env, trans("ADD_USERS"), "html", null, true);
        echo "</h4>
\t  </div>
\t  <div class=\"modal-body\">
\t    <form class=\"form-horizontal\" id=\"users-add-form\" action=\"admin.php?users&amp;add\" role=\"form\" method=\"post\">
\t\t  <div class=\"form-group\">
\t\t    <label for=\"group-select\" class=\"col-sm-4 control-label\">";
        // line 11
        echo twig_escape_filter($this->env, trans("GROUP"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <select id=\"group-select\" name=\"group\" class=\"form-control\">
\t\t\t    <option value=\"none\">";
        // line 14
        echo twig_escape_filter($this->env, trans("NONE"), "html", null, true);
        echo "</option>
\t\t\t    ";
        // line 15
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_groups_);
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "\t\t\t\t  <option value=\"";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_group_, "name"), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"email\" class=\"col-sm-4 control-label\">";
        // line 22
        echo twig_escape_filter($this->env, trans("EMAIL_ADDRESS"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, trans("EMAIL_ADDRESS"), "html", null, true);
        echo "\">
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"firstname\" class=\"col-sm-4 control-label\">";
        // line 28
        echo twig_escape_filter($this->env, trans("FIRST_NAME"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <input type=\"text\" class=\"form-control\" id=\"firstname\" name=\"firstname\" placeholder=\"";
        // line 30
        echo twig_escape_filter($this->env, trans("FIRST_NAME"), "html", null, true);
        echo "\">
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"lastname\" class=\"col-sm-4 control-label\">";
        // line 34
        echo twig_escape_filter($this->env, trans("LAST_NAME"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <input type=\"text\" class=\"form-control\" id=\"lastname\" name=\"lastname\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, trans("LAST_NAME"), "html", null, true);
        echo "\">
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"password\" class=\"col-sm-4 control-label\">";
        // line 40
        echo twig_escape_filter($this->env, trans("PASSWORD"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"";
        // line 42
        echo twig_escape_filter($this->env, trans("PASSWORD"), "html", null, true);
        echo "\" disabled>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"retype_password\" class=\"col-sm-4 control-label\">";
        // line 46
        echo twig_escape_filter($this->env, trans("RETYPE_PASSWORD"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <input type=\"password\" class=\"form-control\" id=\"retype_password\" name=\"retype_password\" placeholder=\"";
        // line 48
        echo twig_escape_filter($this->env, trans("RETYPE_PASSWORD"), "html", null, true);
        echo "\" disabled>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t  <div class=\"checkbox\">
\t\t\t    <label>
\t\t\t\t  <input type=\"checkbox\" id=\"generate_password\" value=\"1\" name=\"generate_password\" checked> ";
        // line 55
        echo twig_escape_filter($this->env, trans("GENERATE_PASSWORD"), "html", null, true);
        echo "
\t\t\t\t</label>
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t</form>
\t  </div>
\t  <div class=\"modal-footer\">
\t    <div class=\"pull-left\"><button type=\"button\" class=\"btn btn-default\">";
        // line 63
        echo twig_escape_filter($this->env, trans("IMPORT"), "html", null, true);
        echo " (.CSV)</button></div>
\t    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 64
        echo twig_escape_filter($this->env, trans("CLOSE"), "html", null, true);
        echo "</button>
\t\t<button type=\"button\" id=\"add-user-btn\" class=\"btn btn-primary\">";
        // line 65
        echo twig_escape_filter($this->env, trans("ADD"), "html", null, true);
        echo "</button>
\t  </div>
\t</div>
  </div>
</div>
";
    }

    // line 70
    public function getscript()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 71
            echo "<script>

\$( function() {

\t\$( '#generate_password' ).change( function() {
\t
\t\tif( \$( this ).prop( 'checked' ) ) {
\t\t
\t\t\t\$( '#password' ).prop( 'disabled', true );
\t\t\t\$( '#retype_password' ).prop( 'disabled', true );
\t\t
\t\t} else {
\t\t
\t\t\t\$( '#password' ).prop( 'disabled', false );
\t\t\t\$( '#retype_password' ).prop( 'disabled', false );
\t\t
\t\t}
\t
\t} );
\t
\t\$( '#add-user-btn' ).click( function() {
\t
\t\t\$( '#users-add-form' ).submit();
\t
\t} );

} );

</script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "admin/users_add_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 71,  160 => 70,  150 => 65,  146 => 64,  142 => 63,  131 => 55,  121 => 48,  116 => 46,  109 => 42,  104 => 40,  97 => 36,  92 => 34,  85 => 30,  80 => 28,  73 => 24,  68 => 22,  62 => 18,  49 => 16,  44 => 15,  40 => 14,  34 => 11,  26 => 6,  39 => 9,  37 => 8,  31 => 5,  27 => 4,  23 => 3,  145 => 64,  143 => 63,  138 => 62,  133 => 61,  123 => 53,  120 => 52,  115 => 51,  112 => 50,  106 => 48,  103 => 47,  93 => 45,  90 => 44,  81 => 38,  75 => 35,  71 => 34,  67 => 33,  55 => 24,  43 => 16,  36 => 13,  30 => 10,  19 => 1,);
    }
}
