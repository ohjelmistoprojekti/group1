<?php

/* admin/groups_edit_form.html */
class __TwigTemplate_6461520425dcec82c9f3231c74e20c9b662eb3ae1cc670bc5b54c97a7a90d341 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"groups-edit-form-modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
\t  <div class=\"modal-header\">
\t    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t<h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, trans("EDIT_GROUP"), "html", null, true);
        echo " (";
        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_group_, 0), "name"), "html", null, true);
        echo ")</h4>
\t  </div>
\t  <div class=\"modal-body\">
\t    <form class=\"form-horizontal\" id=\"groups-edit-form\" action=\"admin.php?groups&amp;edit&amp;id=";
        // line 9
        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_group_, 0), "id"), "html", null, true);
        echo "&amp;submit=true\" role=\"form\" method=\"post\">
\t\t  <div class=\"form-group\">
\t\t    <label for=\"group_name\" class=\"col-sm-4 control-label\">";
        // line 11
        echo twig_escape_filter($this->env, trans("GROUP_NAME"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <input type=\"text\" value=\"";
        // line 13
        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_group_, 0), "name"), "html", null, true);
        echo "\" class=\"form-control\" id=\"group_name\" name=\"group_name\" placeholder=\"";
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
\t\t<button type=\"button\" id=\"edit-group-btn\" class=\"btn btn-primary\">";
        // line 20
        echo twig_escape_filter($this->env, trans("EDIT"), "html", null, true);
        echo "</button>
\t  </div>
\t</div>
  </div>
</div>
";
    }

    // line 25
    public function getscript($_show_edit_form = null)
    {
        $context = $this->env->mergeGlobals(array(
            "show_edit_form" => $_show_edit_form,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "\t
\t";
            // line 27
            if (isset($context["show_edit_form"])) { $_show_edit_form_ = $context["show_edit_form"]; } else { $_show_edit_form_ = null; }
            if (($_show_edit_form_ == true)) {
                // line 28
                echo "\t\t\$( '#groups-edit-form-modal' ).modal( 'show' );
\t";
            }
            // line 30
            echo "\t
\t\$( '#groups-edit-form-modal' ).on( 'hidden.bs.modal', function() {
\t
\t\twindow.location = 'admin.php?groups';
\t
\t} );
\t
\t\$( '#edit-group-btn' ).click( function() {
\t
\t\t\$( '#groups-edit-form' ).submit();
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
        return "admin/groups_edit_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 30,  89 => 28,  86 => 27,  83 => 26,  72 => 25,  62 => 20,  58 => 19,  41 => 11,  103 => 34,  94 => 33,  84 => 28,  79 => 25,  70 => 22,  66 => 20,  54 => 17,  49 => 16,  46 => 13,  40 => 14,  26 => 6,  39 => 9,  35 => 9,  31 => 7,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
