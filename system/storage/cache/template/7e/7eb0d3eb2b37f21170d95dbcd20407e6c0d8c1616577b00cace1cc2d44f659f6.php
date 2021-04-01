<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* install/step_3.twig */
class __TwigTemplate_05596c1a81cea06f613b4f9e79be1c7ff2d4d1914fceb7807c8323d862cd44de extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div class=\"container\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h1 class=\"pull-left\">3<small>/4</small></h1>
        <h3>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "<br>
          <small>";
        // line 8
        echo ($context["text_step_3"] ?? null);
        echo "</small></h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"> <img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\" /></div>
      </div>
    </div>
  </header>
  ";
        // line 15
        if (($context["error_warning"] ?? null)) {
            // line 16
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 20
        echo "  <div class=\"row\">
    <div class=\"col-sm-9\">
      <form action=\"";
        // line 22
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <p>";
        // line 23
        echo ($context["text_db_connection"] ?? null);
        echo "</p>
        <fieldset>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-driver\">";
        // line 26
        echo ($context["entry_db_driver"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"db_driver\" id=\"input-db-driver\" class=\"form-control\">
                ";
        // line 29
        if (($context["mysqli"] ?? null)) {
            // line 30
            echo "                ";
            if ((($context["db_driver"] ?? null) == "mysqli")) {
                // line 31
                echo "                <option value=\"mysqli\" selected=\"selected\">";
                echo ($context["text_mysqli"] ?? null);
                echo "</option>
                ";
            } else {
                // line 33
                echo "                <option value=\"mysqli\">";
                echo ($context["text_mysqli"] ?? null);
                echo "</option>
                ";
            }
            // line 35
            echo "                ";
        }
        // line 36
        echo "                ";
        if (($context["pdo"] ?? null)) {
            // line 37
            echo "                ";
            if ((($context["db_driver"] ?? null) == "mpdo")) {
                // line 38
                echo "                <option value=\"mpdo\" selected=\"selected\">";
                echo ($context["text_mpdo"] ?? null);
                echo "</option>
                ";
            } else {
                // line 40
                echo "                <option value=\"mpdo\">";
                echo ($context["text_mpdo"] ?? null);
                echo "</option>
                ";
            }
            // line 42
            echo "                ";
        }
        // line 43
        echo "                ";
        if (($context["pgsql"] ?? null)) {
            // line 44
            echo "                ";
            if ((($context["db_driver"] ?? null) == "pgsql")) {
                // line 45
                echo "                <option value=\"pgsql\" selected=\"selected\">";
                echo ($context["text_pgsql"] ?? null);
                echo "</option>
                ";
            } else {
                // line 47
                echo "                <option value=\"pgsql\">";
                echo ($context["text_pgsql"] ?? null);
                echo "</option>
                ";
            }
            // line 49
            echo "                ";
        }
        // line 50
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-hostname\">";
        // line 54
        echo ($context["entry_db_hostname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_hostname\" value=\"";
        // line 56
        echo ($context["db_hostname"] ?? null);
        echo "\" id=\"input-db-hostname\" class=\"form-control\" />
              ";
        // line 57
        if (($context["error_db_hostname"] ?? null)) {
            // line 58
            echo "              <div class=\"text-danger\">";
            echo ($context["error_db_hostname"] ?? null);
            echo "</div>
              ";
        }
        // line 60
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-username\">";
        // line 63
        echo ($context["entry_db_username"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_username\" value=\"";
        // line 65
        echo ($context["db_username"] ?? null);
        echo "\" id=\"input-db-username\" class=\"form-control\" />
              ";
        // line 66
        if (($context["error_db_username"] ?? null)) {
            // line 67
            echo "              <div class=\"text-danger\">";
            echo ($context["error_db_username"] ?? null);
            echo "</div>
              ";
        }
        // line 69
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-password\">";
        // line 72
        echo ($context["entry_db_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"db_password\" value=\"";
        // line 74
        echo ($context["db_password"] ?? null);
        echo "\" id=\"input-db-password\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-database\">";
        // line 78
        echo ($context["entry_db_database"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_database\" value=\"";
        // line 80
        echo ($context["db_database"] ?? null);
        echo "\" id=\"input-db-database\" class=\"form-control\" />
              ";
        // line 81
        if (($context["error_db_database"] ?? null)) {
            // line 82
            echo "              <div class=\"text-danger\">";
            echo ($context["error_db_database"] ?? null);
            echo "</div>
              ";
        }
        // line 84
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-port\">";
        // line 87
        echo ($context["entry_db_port"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_port\" value=\"";
        // line 89
        echo ($context["db_port"] ?? null);
        echo "\" id=\"input-db-port\" class=\"form-control\" />
              ";
        // line 90
        if (($context["error_db_port"] ?? null)) {
            // line 91
            echo "              <div class=\"text-danger\">";
            echo ($context["error_db_port"] ?? null);
            echo "</div>
              ";
        }
        // line 93
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-db-prefix\">";
        // line 96
        echo ($context["entry_db_prefix"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"db_prefix\" value=\"";
        // line 98
        echo ($context["db_prefix"] ?? null);
        echo "\" id=\"input-db-prefix\" class=\"form-control\" />
              ";
        // line 99
        if (($context["error_db_prefix"] ?? null)) {
            // line 100
            echo "              <div class=\"text-danger\">";
            echo ($context["error_db_prefix"] ?? null);
            echo "</div>
              ";
        }
        // line 102
        echo "            </div>
          </div>
        </fieldset>
        <p>";
        // line 105
        echo ($context["text_db_administration"] ?? null);
        echo "</p>
        <fieldset>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-username\">";
        // line 108
        echo ($context["entry_username"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"username\" value=\"";
        // line 110
        echo ($context["username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\" />
              ";
        // line 111
        if (($context["error_username"] ?? null)) {
            // line 112
            echo "              <div class=\"text-danger\">";
            echo ($context["error_username"] ?? null);
            echo "</div>
              ";
        }
        // line 114
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 117
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"password\" value=\"";
        // line 119
        echo ($context["password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 120
        if (($context["error_password"] ?? null)) {
            // line 121
            echo "              <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 123
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 126
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 128
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 129
        if (($context["error_email"] ?? null)) {
            // line 130
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 132
        echo "            </div>
          </div>
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-left\"><a href=\"";
        // line 136
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 138
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
    </div>
    <div class=\"col-sm-3\">";
        // line 143
        echo ($context["column_left"] ?? null);
        echo "</div>
  </div>
</div>
";
        // line 146
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "install/step_3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 146,  368 => 143,  360 => 138,  353 => 136,  347 => 132,  341 => 130,  339 => 129,  335 => 128,  330 => 126,  325 => 123,  319 => 121,  317 => 120,  313 => 119,  308 => 117,  303 => 114,  297 => 112,  295 => 111,  291 => 110,  286 => 108,  280 => 105,  275 => 102,  269 => 100,  267 => 99,  263 => 98,  258 => 96,  253 => 93,  247 => 91,  245 => 90,  241 => 89,  236 => 87,  231 => 84,  225 => 82,  223 => 81,  219 => 80,  214 => 78,  207 => 74,  202 => 72,  197 => 69,  191 => 67,  189 => 66,  185 => 65,  180 => 63,  175 => 60,  169 => 58,  167 => 57,  163 => 56,  158 => 54,  152 => 50,  149 => 49,  143 => 47,  137 => 45,  134 => 44,  131 => 43,  128 => 42,  122 => 40,  116 => 38,  113 => 37,  110 => 36,  107 => 35,  101 => 33,  95 => 31,  92 => 30,  90 => 29,  84 => 26,  78 => 23,  74 => 22,  70 => 20,  62 => 16,  60 => 15,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/step_3.twig", "");
    }
}
