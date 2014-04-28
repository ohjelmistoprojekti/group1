<?php

/* admin/users_edit_form.html */
class __TwigTemplate_3d15934512e4afedf20f81f885af8f47658918e604880ca75c74d68d4d2f9886 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"users-edit-form-modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
\t  <div class=\"modal-header\">
\t    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t<h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, trans("EDIT_USER"), "html", null, true);
        echo " (";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_user_, 0), "email"), "html", null, true);
        echo ")</h4>
\t  </div>
\t  <div class=\"modal-body\">
\t    <form class=\"form-horizontal\" id=\"users-edit-form\" action=\"admin.php?users&amp;edit&amp;id=";
        // line 9
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_user_, 0), "id"), "html", null, true);
        echo "&amp;submit=true\" role=\"form\" method=\"post\">
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
            echo "\t\t\t\t  ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            if (($this->getAttribute($this->getAttribute($_user_, 0), "gid") == $this->getAttribute($_group_, "id"))) {
                // line 17
                echo "\t\t\t\t  <option value=\"";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "id"), "html", null, true);
                echo "\" selected>";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "name"), "html", null, true);
                echo "</option>
\t\t\t\t  ";
            } else {
                // line 19
                echo "\t\t\t\t  <option value=\"";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "id"), "html", null, true);
                echo "\">";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "name"), "html", null, true);
                echo "</option>
\t\t\t\t  ";
            }
            // line 21
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"email\" class=\"col-sm-4 control-label\">";
        // line 26
        echo twig_escape_filter($this->env, trans("EMAIL_ADDRESS"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <p class=\"form-control-static\">";
        // line 28
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_user_, 0), "email"), "html", null, true);
        echo "</p>
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"firstname\" class=\"col-sm-4 control-label\">";
        // line 32
        echo twig_escape_filter($this->env, trans("FIRST_NAME"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <input type=\"text\" value=\"";
        // line 34
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_user_, 0), "firstname"), "html", null, true);
        echo "\" class=\"form-control\" id=\"firstname\" name=\"firstname\" placeholder=\"";
        echo twig_escape_filter($this->env, trans("FIRST_NAME"), "html", null, true);
        echo "\">
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"lastname\" class=\"col-sm-4 control-label\">";
        // line 38
        echo twig_escape_filter($this->env, trans("LAST_NAME"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <input type=\"text\" value=\"";
        // line 40
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_user_, 0), "lastname"), "html", null, true);
        echo "\" class=\"form-control\" id=\"lastname\" name=\"lastname\" placeholder=\"";
        echo twig_escape_filter($this->env, trans("LAST_NAME"), "html", null, true);
        echo "\">
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"password\" class=\"col-sm-4 control-label\">";
        // line 44
        echo twig_escape_filter($this->env, trans("PASSWORD"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <input type=\"password\" class=\"form-control\" id=\"e_password\" name=\"password\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, trans("PASSWORD"), "html", null, true);
        echo "\">
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"retype_password\" class=\"col-sm-4 control-label\">";
        // line 50
        echo twig_escape_filter($this->env, trans("RETYPE_PASSWORD"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <input type=\"password\" class=\"form-control\" id=\"e_retype_password\" name=\"retype_password\" placeholder=\"";
        // line 52
        echo twig_escape_filter($this->env, trans("RETYPE_PASSWORD"), "html", null, true);
        echo "\">
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t  <div class=\"checkbox\">
\t\t\t    <label>
\t\t\t\t  <input type=\"checkbox\" class=\"generate_password\" name=\"generate_password\"> ";
        // line 59
        echo twig_escape_filter($this->env, trans("GENERATE_PASSWORD"), "html", null, true);
        echo "
\t\t\t\t</label>
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t</form>
\t  </div>
\t  <div class=\"modal-footer\">
\t    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 67
        echo twig_escape_filter($this->env, trans("CLOSE"), "html", null, true);
        echo "</button>
\t\t<button type=\"button\" id=\"edit-user-btn\" class=\"btn btn-primary\">";
        // line 68
        echo twig_escape_filter($this->env, trans("EDIT"), "html", null, true);
        echo "</button>
\t  </div>
\t</div>
  </div>
</div>
";
    }

    // line 73
    public function getscript($_show_edit_form = null)
    {
        $context = $this->env->mergeGlobals(array(
            "show_edit_form" => $_show_edit_form,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 74
            echo "\t
\t";
            // line 75
            if (isset($context["show_edit_form"])) { $_show_edit_form_ = $context["show_edit_form"]; } else { $_show_edit_form_ = null; }
            if (($_show_edit_form_ == true)) {
                // line 76
                echo "\t\t\$( '#users-edit-form-modal' ).modal( 'show' );
\t";
            }
            // line 78
            echo "
\t\$( '#users-edit-form-modal .generate_password' ).change( function() {

\t\tif( \$( this ).prop( 'checked' ) ) {
\t\t
\t\t\t\$( '#users-edit-form-modal #e_password' ).prop( 'disabled', true );
\t\t\t\$( '#users-edit-form-modal #e_retype_password' ).prop( 'disabled', true );
\t\t
\t\t} else {
\t\t
\t\t\t\$( '#users-edit-form-modal #e_password' ).prop( 'disabled', false );
\t\t\t\$( '#users-edit-form-modal #e_retype_password' ).prop( 'disabled', false );
\t\t
\t\t}
\t
\t} );
\t
\t\$( '#users-edit-form-modal' ).on( 'hidden.bs.modal', function() {
\t
\t\twindow.location = 'admin.php?users';
\t
\t} );
\t
\t\$( '#edit-user-btn' ).click( function() {
\t
\t\t\$( '#users-edit-form' ).submit();
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
        return "admin/users_edit_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 78,  205 => 76,  202 => 75,  199 => 74,  188 => 73,  178 => 68,  174 => 67,  163 => 59,  153 => 52,  148 => 50,  141 => 46,  136 => 44,  126 => 40,  121 => 38,  111 => 34,  106 => 32,  98 => 28,  93 => 26,  87 => 22,  81 => 21,  71 => 19,  61 => 17,  56 => 16,  51 => 15,  47 => 14,  41 => 11,  35 => 9,  26 => 6,  19 => 1,);
    }
}
