<?php

/* admin/admin.html */
class __TwigTemplate_68576bc702654c32231daf49de9d4633688aa7fc0b88fd9d819bf1ef1915d396 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 10
        echo twig_escape_filter($this->env, trans("ADMIN"), "html", null, true);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        if (isset($context["_STYLES_PATH"])) { $__STYLES_PATH_ = $context["_STYLES_PATH"]; } else { $__STYLES_PATH_ = null; }
        echo twig_escape_filter($this->env, $__STYLES_PATH_, "html", null, true);
        echo "/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 16
        if (isset($context["_STYLES_PATH"])) { $__STYLES_PATH_ = $context["_STYLES_PATH"]; } else { $__STYLES_PATH_ = null; }
        echo twig_escape_filter($this->env, $__STYLES_PATH_, "html", null, true);
        echo "/dashboard.css\" rel=\"stylesheet\">
  </head>

  <body>

    <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <a class=\"navbar-brand\" href=\"#\">";
        // line 24
        echo twig_escape_filter($this->env, trans("SQL_TOOL"), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>

    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            <li><a href=\"admin.php?users\">";
        // line 33
        echo twig_escape_filter($this->env, trans("USERS"), "html", null, true);
        echo "</a></li>
            <li><a href=\"admin.php?groups\">";
        // line 34
        echo twig_escape_filter($this->env, trans("GROUPS"), "html", null, true);
        echo "</a></li>
            <li><a href=\"admin.php?assignments\">";
        // line 35
        echo twig_escape_filter($this->env, trans("ASSIGNMENTS"), "html", null, true);
        echo "</a></li>
          </ul>
\t\t  <ul class=\"nav nav-sidebar\">
\t\t    <li><a href=\"index.php?logout\">";
        // line 38
        echo twig_escape_filter($this->env, trans("LOGOUT"), "html", null, true);
        echo "</a></li>
\t\t  </ul>
        </div>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
          <h1 class=\"page-header\">Dashboard</h1>

\t\t  ";
        // line 44
        if (isset($context["MESSAGE"])) { $_MESSAGE_ = $context["MESSAGE"]; } else { $_MESSAGE_ = null; }
        if ($_MESSAGE_) {
            // line 45
            echo "          <div class=\"alert alert-";
            if (isset($context["MESSAGE_TYPE"])) { $_MESSAGE_TYPE_ = $context["MESSAGE_TYPE"]; } else { $_MESSAGE_TYPE_ = null; }
            echo twig_escape_filter($this->env, $_MESSAGE_TYPE_, "html", null, true);
            echo "\">";
            if (isset($context["MESSAGE"])) { $_MESSAGE_ = $context["MESSAGE"]; } else { $_MESSAGE_ = null; }
            echo twig_escape_filter($this->env, $_MESSAGE_, "html", null, true);
            echo "</div>
\t\t  ";
        }
        // line 47
        echo "
          <h2 class=\"sub-header\">";
        // line 48
        if (isset($context["SECTION_TITLE"])) { $_SECTION_TITLE_ = $context["SECTION_TITLE"]; } else { $_SECTION_TITLE_ = null; }
        echo twig_escape_filter($this->env, $_SECTION_TITLE_, "html", null, true);
        echo "</h2>
\t\t  
\t\t  ";
        // line 50
        if (isset($context["SECTION_CONTENT"])) { $_SECTION_CONTENT_ = $context["SECTION_CONTENT"]; } else { $_SECTION_CONTENT_ = null; }
        if ($_SECTION_CONTENT_) {
            // line 51
            echo "\t\t    ";
            if (isset($context["SECTION_CONTENT"])) { $_SECTION_CONTENT_ = $context["SECTION_CONTENT"]; } else { $_SECTION_CONTENT_ = null; }
            $template = $this->env->resolveTemplate($_SECTION_CONTENT_);
            $template->display($context);
            // line 52
            echo "\t\t  ";
        }
        // line 53
        echo "\t\t  
        </div>
      </div>
    </div>
\t
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 61
        if (isset($context["_JS_PATH"])) { $__JS_PATH_ = $context["_JS_PATH"]; } else { $__JS_PATH_ = null; }
        echo twig_escape_filter($this->env, $__JS_PATH_, "html", null, true);
        echo "/jquery-1.11.0.min.js\"></script>
    <script src=\"";
        // line 62
        if (isset($context["_JS_PATH"])) { $__JS_PATH_ = $context["_JS_PATH"]; } else { $__JS_PATH_ = null; }
        echo twig_escape_filter($this->env, $__JS_PATH_, "html", null, true);
        echo "/bootstrap.min.js\"></script>
\t<script>
\t\$( function() {
\t";
        // line 65
        if (isset($context["in_user_management"])) { $_in_user_management_ = $context["in_user_management"]; } else { $_in_user_management_ = null; }
        if (isset($context["in_group_management"])) { $_in_group_management_ = $context["in_group_management"]; } else { $_in_group_management_ = null; }
        if (isset($context["in_assignment_management"])) { $_in_assignment_management_ = $context["in_assignment_management"]; } else { $_in_assignment_management_ = null; }
        if ($_in_user_management_) {
            // line 66
            echo "\t\t";
            $context["add_user_form"] = $this->env->loadTemplate("admin/users_add_form.html");
            // line 67
            echo "\t\t";
            $context["edit_user_form"] = $this->env->loadTemplate("admin/users_edit_form.html");
            // line 68
            echo "\t\t";
            $context["edit_user_list"] = $this->env->loadTemplate("admin/users_edit_list.html");
            // line 69
            echo "\t\t";
            $context["delete_user_list"] = $this->env->loadTemplate("admin/users_delete_list.html");
            // line 70
            echo "\t\t";
            if (isset($context["add_user_form"])) { $_add_user_form_ = $context["add_user_form"]; } else { $_add_user_form_ = null; }
            echo $_add_user_form_->getscript();
            echo "
\t\t";
            // line 71
            if (isset($context["edit_user_form"])) { $_edit_user_form_ = $context["edit_user_form"]; } else { $_edit_user_form_ = null; }
            if (isset($context["show_edit_form"])) { $_show_edit_form_ = $context["show_edit_form"]; } else { $_show_edit_form_ = null; }
            echo $_edit_user_form_->getscript($_show_edit_form_);
            echo "
\t\t";
            // line 72
            if (isset($context["edit_user_list"])) { $_edit_user_list_ = $context["edit_user_list"]; } else { $_edit_user_list_ = null; }
            echo $_edit_user_list_->getscript();
            echo "
\t\t";
            // line 73
            if (isset($context["delete_user_list"])) { $_delete_user_list_ = $context["delete_user_list"]; } else { $_delete_user_list_ = null; }
            echo $_delete_user_list_->getscript();
            echo "
\t";
        } elseif ($_in_group_management_) {
            // line 75
            echo "\t\t";
            $context["add_group_form"] = $this->env->loadTemplate("admin/groups_add_form.html");
            // line 76
            echo "\t\t";
            $context["edit_group_form"] = $this->env->loadTemplate("admin/groups_edit_form.html");
            // line 77
            echo "\t\t";
            $context["edit_group_list"] = $this->env->loadTemplate("admin/groups_edit_list.html");
            // line 78
            echo "\t\t";
            $context["delete_group_list"] = $this->env->loadTemplate("admin/groups_delete_list.html");
            // line 79
            echo "\t\t";
            if (isset($context["add_group_form"])) { $_add_group_form_ = $context["add_group_form"]; } else { $_add_group_form_ = null; }
            echo $_add_group_form_->getscript();
            echo "
\t\t";
            // line 80
            if (isset($context["edit_group_form"])) { $_edit_group_form_ = $context["edit_group_form"]; } else { $_edit_group_form_ = null; }
            if (isset($context["show_edit_form"])) { $_show_edit_form_ = $context["show_edit_form"]; } else { $_show_edit_form_ = null; }
            echo $_edit_group_form_->getscript($_show_edit_form_);
            echo "
\t\t";
            // line 81
            if (isset($context["edit_group_list"])) { $_edit_group_list_ = $context["edit_group_list"]; } else { $_edit_group_list_ = null; }
            echo $_edit_group_list_->getscript();
            echo "
\t\t";
            // line 82
            if (isset($context["delete_group_list"])) { $_delete_group_list_ = $context["delete_group_list"]; } else { $_delete_group_list_ = null; }
            echo $_delete_group_list_->getscript();
            echo "
\t";
        } elseif ($_in_assignment_management_) {
            // line 84
            echo "\t\t";
            $context["add_assignment_form"] = $this->env->loadTemplate("admin/assignments_add_form.html");
            // line 85
            echo "\t\t
\t\t";
            // line 86
            if (isset($context["add_assignment_form"])) { $_add_assignment_form_ = $context["add_assignment_form"]; } else { $_add_assignment_form_ = null; }
            echo $_add_assignment_form_->getscript();
            echo "
\t";
        }
        // line 88
        echo "\t} );
\t</script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "admin/admin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 88,  226 => 86,  223 => 85,  220 => 84,  214 => 82,  209 => 81,  203 => 80,  197 => 79,  194 => 78,  191 => 77,  188 => 76,  185 => 75,  179 => 73,  174 => 72,  168 => 71,  162 => 70,  159 => 69,  156 => 68,  153 => 67,  150 => 66,  145 => 65,  138 => 62,  133 => 61,  123 => 53,  120 => 52,  115 => 51,  112 => 50,  106 => 48,  103 => 47,  93 => 45,  90 => 44,  81 => 38,  75 => 35,  71 => 34,  67 => 33,  55 => 24,  43 => 16,  36 => 13,  30 => 10,  19 => 1,);
    }
}
