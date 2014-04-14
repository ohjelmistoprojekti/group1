<?php

/* auth.html */
class __TwigTemplate_749d3c3a131d2fbad05c4c327a920400b6c8e6d9a9ee794bd5b745e7a1f7e168 extends Twig_Template
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
    <link rel=\"shortcut icon\" href=\"../../assets/ico/favicon.ico\">

    <title>";
        // line 11
        echo twig_escape_filter($this->env, trans("LOGIN"), "html", null, true);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        if (isset($context["_STYLES_PATH"])) { $__STYLES_PATH_ = $context["_STYLES_PATH"]; } else { $__STYLES_PATH_ = null; }
        echo twig_escape_filter($this->env, $__STYLES_PATH_, "html", null, true);
        echo "/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 17
        if (isset($context["_STYLES_PATH"])) { $__STYLES_PATH_ = $context["_STYLES_PATH"]; } else { $__STYLES_PATH_ = null; }
        echo twig_escape_filter($this->env, $__STYLES_PATH_, "html", null, true);
        echo "/signin.css\" rel=\"stylesheet\">
  </head>
  <body>
    <div class=\"container\">
      <form class=\"form-signin\" action=\"#\" method=\"post\" role=\"form\">
\t    <div class=\"alert alert-danger\"></div>
\t\t<div class=\"alert alert-success\">";
        // line 23
        if (isset($context["LOGGED_OUT"])) { $_LOGGED_OUT_ = $context["LOGGED_OUT"]; } else { $_LOGGED_OUT_ = null; }
        echo twig_escape_filter($this->env, $_LOGGED_OUT_, "html", null, true);
        echo "</div>
        <h2 class=\"form-signin-heading\">";
        // line 24
        echo twig_escape_filter($this->env, trans("SQL_TOOL"), "html", null, true);
        echo "</h2>
        <input type=\"email\" class=\"form-control\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, trans("EMAIL_ADDRESS"), "html", null, true);
        echo "\" name=\"email\" required autofocus>
        <input type=\"password\" class=\"form-control\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, trans("PASSWORD"), "html", null, true);
        echo "\" name=\"password\" required>
        <button class=\"btn btn-lg btn-primary btn-block\" name=\"login\" type=\"submit\">";
        // line 27
        echo twig_escape_filter($this->env, trans("LOGIN"), "html", null, true);
        echo "</button>
      </form>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
\t<script src=\"";
        // line 33
        if (isset($context["_JS_PATH"])) { $__JS_PATH_ = $context["_JS_PATH"]; } else { $__JS_PATH_ = null; }
        echo twig_escape_filter($this->env, $__JS_PATH_, "html", null, true);
        echo "/jquery-1.11.0.min.js\"></script>
\t<script src=\"";
        // line 34
        if (isset($context["_JS_PATH"])) { $__JS_PATH_ = $context["_JS_PATH"]; } else { $__JS_PATH_ = null; }
        echo twig_escape_filter($this->env, $__JS_PATH_, "html", null, true);
        echo "/bootstrap.min.js\"></script>
\t<script>
\t
\t\t\$( function() {
\t\t
\t\t\t\$( '.alert-danger' ).hide();
\t\t\tif( \$( '.alert-success' ).html() == '' ) \$( '.alert-success' ).hide();
\t\t
\t\t\t\$( '.form-signin' ).submit( function( e ) {
\t\t
\t\t\t\te.preventDefault();
\t\t
\t\t\t\tvar a_email\t\t= \$( 'input[type=\"email\"]' ).val();
\t\t\t\tvar a_password\t= \$( 'input[type=\"password\"]' ).val();
\t\t\t\t
\t\t\t\t\$.post( 'index.php?login', { email : a_email, password : a_password, login : true }, function( data ) {

\t\t\t\t\tdata = JSON.parse( data );
\t\t\t\t\t
\t\t\t\t\tif( data.warning ) {
\t\t\t\t\t
\t\t\t\t\t\t\$( '.alert-danger' ).show();
\t\t\t\t\t\t\$( '.alert-danger' ).html( \"<strong>";
        // line 56
        echo twig_escape_filter($this->env, trans("ERROR"), "html", null, true);
        echo ":</strong> \" + data.message );
\t\t\t\t\t
\t\t\t\t\t} else if( data.success ) {
\t\t\t\t\t
\t\t\t\t\t\twindow.location = 'admin.php';
\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t
\t\t\t\t} );
\t\t
\t\t\t} );
\t\t
\t\t} );
\t
\t</script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "auth.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 56,  85 => 34,  80 => 33,  71 => 27,  67 => 26,  63 => 25,  59 => 24,  54 => 23,  44 => 17,  37 => 14,  31 => 11,  19 => 1,);
    }
}
