<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* install/step2.html.twig */
class __TwigTemplate_3ac4796e50d3214cae7bdfc7e2d9e45c extends Template
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
        // line 33
        yield "
<h3>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Database connection setup"), "html", null, true);
        yield "</h3>

<form action=\"install.php\" method=\"post\" data-submit-once>

   <div class=\"mb-3\">
      <label for=\"db_host\" class=\"form-label\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("SQL server (MariaDB or MySQL)"), "html", null, true);
        yield "</label>
      <input type=\"text\" class=\"form-control\" id=\"db_host\" name=\"db_host\">
   </div>

   <div class=\"mb-3\">
      <label for=\"db_user\" class=\"form-label\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("SQL user"), "html", null, true);
        yield "</label>
      <input type=\"text\" class=\"form-control\" id=\"db_user\" name=\"db_user\">
   </div>

   <div class=\"mb-3\">
      <label for=\"db_pass\" class=\"form-label\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("SQL password"), "html", null, true);
        yield "</label>
      <input type=\"password\" class=\"form-control\" id=\"db_pass\" name=\"db_pass\">
   </div>

   <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
      ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "html", null, true);
        yield "
      <i class=\"fas fa-chevron-right ms-1\"></i>
   </button>

   <input type=\"hidden\" name=\"update\" value=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["update"] ?? null), "html", null, true);
        yield "\">
   <input type=\"hidden\" name=\"install\" value=\"Etape_2\">
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "install/step2.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  85 => 60,  80 => 58,  73 => 54,  65 => 49,  57 => 44,  49 => 39,  41 => 34,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2025 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

<h3>{{ __('Database connection setup') }}</h3>

<form action=\"install.php\" method=\"post\" data-submit-once>

   <div class=\"mb-3\">
      <label for=\"db_host\" class=\"form-label\">{{ __('SQL server (MariaDB or MySQL)') }}</label>
      <input type=\"text\" class=\"form-control\" id=\"db_host\" name=\"db_host\">
   </div>

   <div class=\"mb-3\">
      <label for=\"db_user\" class=\"form-label\">{{ __('SQL user') }}</label>
      <input type=\"text\" class=\"form-control\" id=\"db_user\" name=\"db_user\">
   </div>

   <div class=\"mb-3\">
      <label for=\"db_pass\" class=\"form-label\">{{ __('SQL password') }}</label>
      <input type=\"password\" class=\"form-control\" id=\"db_pass\" name=\"db_pass\">
   </div>

   <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
      {{ __(\"Continue\") }}
      <i class=\"fas fa-chevron-right ms-1\"></i>
   </button>

   <input type=\"hidden\" name=\"update\" value=\"{{ update }}\">
   <input type=\"hidden\" name=\"install\" value=\"Etape_2\">
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\">
</form>
", "install/step2.html.twig", "C:\\OneDriveFalse\\1 - KevDev\\2 - Estudos\\GLPI\\htdocs\\glpi\\templates\\install\\step2.html.twig");
    }
}
