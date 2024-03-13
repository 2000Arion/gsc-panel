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

/* login/twofactor/webauthn_creation.twig */
class __TwigTemplate_d50100eac55d26296fcdf980fdb06181 extends Template
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
        echo "<p class=\"card-text\">";
        echo twig_escape_filter($this->env, _gettext("Please connect your WebAuthn/FIDO2 device. Then confirm registration on the device."), "html", null, true);
        echo "</p>

<input type=\"hidden\" id=\"webauthn_creation_response\" name=\"webauthn_creation_response\" value=\"\" data-creation-options=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["creation_options"] ?? null), "html_attr");
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "login/twofactor/webauthn_creation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/twofactor/webauthn_creation.twig", "/var/www/pterodactyl/public/phpmyadmin/templates/login/twofactor/webauthn_creation.twig");
    }
}
