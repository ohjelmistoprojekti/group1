<?php

/* login.html */
class __TwigTemplate_5c8e5e50750a91aaaae1e09d2eb304d42ab9522d55e33f5c19c73c69577a3f6c extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["_STYLES_PATH"]) ? $context["_STYLES_PATH"] : null), "html", null, true);
        echo "/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["_STYLES_PATH"]) ? $context["_STYLES_PATH"] : null), "html", null, true);
        echo "/signin.css\" rel=\"stylesheet\">
  </head>
  <body>
    <div class=\"container\">
      <form class=\"form-signin\" action=\"#\" method=\"post\" role=\"form\">
\t    <div class=\"alert alert-danger\"></div>
        <h2 class=\"form-signin-heading\">";
        // line 23
        echo twig_escape_filter($this->env, trans("SQL_TOOL"), "html", null, true);
        echo "</h2>
        <input type=\"email\" class=\"form-control\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, trans("EMAIL_ADDRESS"), "html", null, true);
        echo "\" name=\"email\" required autofocus>
        <input type=\"password\" class=\"form-control\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, trans("PASSWORD"), "html", null, true);
        echo "\" name=\"password\" required>
        <button class=\"btn btn-lg btn-primary btn-block\" name=\"login\" type=\"submit\">";
        // line 26
        echo twig_escape_filter($this->env, trans("LOGIN"), "html", null, true);
        echo "</button>
      </form>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["_JS_PATH"]) ? $context["_JS_PATH"] : null), "html", null, true);
        echo "/jquery-1.11.0.min.js\"></script>
\t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["_JS_PATH"]) ? $context["_JS_PATH"] : null), "html", null, true);
        echo "/bootstrap.min.js\"></script>
\t<script>
\t
\t\t\$( function() {
\t\t
\t\t\t\$( '.alert' ).hide();
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
\t\t\t\t\t\t\$( '.alert' ).show();
\t\t\t\t\t\t\$( '.alert' ).html( \"<strong>";
        // line 54
        echo twig_escape_filter($this->env, trans("ERROR"), "html", null, true);
        echo ":</strong> \" + data.message );
\t\t\t\t\t
\t\t\t\t\t} else if( data.success ) {
\t\t\t\t\t
\t\t\t\t\t\twindow.location = 'index.php';
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
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 54,  77 => 33,  73 => 32,  64 => 26,  60 => 25,  56 => 24,  52 => 23,  43 => 17,  37 => 14,  31 => 11,  19 => 1,);
    }
}
