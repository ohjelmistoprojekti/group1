<?php

/* admin/assignments_add_form.html */
class __TwigTemplate_e7c70631b13e0fa7e573e1cbe5eabbd89328946dcf505f2432ca289d24c01ea0 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"assignments-add-form-modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
\t  <div class=\"modal-header\">
\t    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t<h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, trans("ADD_ASSIGNMENT"), "html", null, true);
        echo "</h4>
\t  </div>
\t  <div class=\"modal-body\">
\t    <form class=\"form-horizontal\" id=\"assignments-add-form\" action=\"admin.php?assignments&amp;add\" role=\"form\" method=\"post\">
\t\t  <div class=\"form-group\">
\t\t    <label for=\"assignment_name\" class=\"col-sm-4 control-label\">";
        // line 11
        echo twig_escape_filter($this->env, trans("NAME"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <input type=\"text\" class=\"form-control\" id=\"assignment_name\" name=\"assignment_name\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, trans("NAME"), "html", null, true);
        echo "\">
\t\t    </div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"assignment_description\" class=\"col-sm-4 control-label\">";
        // line 17
        echo twig_escape_filter($this->env, trans("DESCRIPTION"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <textarea style=\"resize: vertical;\" class=\"form-control\" id=\"assignment_description\" name=\"assignment_description\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, trans("DESCRIPTION"), "html", null, true);
        echo "\"></textarea>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <label for=\"assignment_exanswer\" class=\"col-sm-4 control-label\">";
        // line 23
        echo twig_escape_filter($this->env, trans("EXAMPLE_ANSWER"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-sm-8\">
\t\t\t  <textarea style=\"resize: vertical;\" class=\"form-control\" id=\"assignment_exanswer\" name=\"assignment_exanswer\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, trans("EXAMPLE_ANSWER"), "html", null, true);
        echo "\"></textarea>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t    <div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t  <div class=\"checkbox\">
\t\t\t    <label>
\t\t\t\t  <input type=\"checkbox\" class=\"show_example_answer\" name=\"show_example_answer\" checked> ";
        // line 32
        echo twig_escape_filter($this->env, trans("SHOW_EXAMPLE_ANSWER"), "html", null, true);
        echo "
\t\t\t\t</label>
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t</form>
\t  </div>
\t  <div class=\"modal-footer\">
\t    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 40
        echo twig_escape_filter($this->env, trans("CLOSE"), "html", null, true);
        echo "</button>
\t\t<button type=\"button\" id=\"add-assignment-btn\" class=\"btn btn-primary\">";
        // line 41
        echo twig_escape_filter($this->env, trans("ADD"), "html", null, true);
        echo "</button>
\t  </div>
\t</div>
  </div>
</div>
";
    }

    // line 46
    public function getscript()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 47
            echo "\t
\t\$( '#add-assignment-btn' ).click( function() {
\t
\t\t\$( '#assignments-add-form' ).submit();
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
        return "admin/assignments_add_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 47,  98 => 46,  88 => 41,  84 => 40,  73 => 32,  63 => 25,  58 => 23,  51 => 19,  46 => 17,  39 => 13,  34 => 11,  26 => 6,  33 => 6,  29 => 5,  25 => 4,  21 => 2,  232 => 88,  226 => 86,  223 => 85,  220 => 84,  214 => 82,  209 => 81,  203 => 80,  197 => 79,  194 => 78,  191 => 77,  188 => 76,  185 => 75,  179 => 73,  174 => 72,  168 => 71,  162 => 70,  159 => 69,  156 => 68,  153 => 67,  150 => 66,  145 => 65,  138 => 62,  133 => 61,  123 => 53,  120 => 52,  115 => 51,  112 => 50,  106 => 48,  103 => 47,  93 => 45,  90 => 44,  81 => 38,  75 => 35,  71 => 34,  67 => 33,  55 => 24,  43 => 16,  36 => 13,  30 => 10,  19 => 1,);
    }
}
