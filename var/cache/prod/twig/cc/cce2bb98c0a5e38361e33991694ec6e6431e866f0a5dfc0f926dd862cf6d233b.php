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

/* @email/zurb_2/notification/local.css */
class __TwigTemplate_be5e2b905afa2d174c12d7d5b4463d5f740149e2c4be85ca7a1e3a9fcb5340eb extends Template
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
        echo "body {
    background: #f3f3f3;
}

.wrapper.secondary {
    background: #f3f3f3;
}

.container.body_alert {
    border-top: 8px solid #ec5840;
}

.container.body_warning {
    border-top: 8px solid #ffae00;
}

.container.body_default {
    border-top: 8px solid #aaaaaa;
}
";
    }

    public function getTemplateName()
    {
        return "@email/zurb_2/notification/local.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@email/zurb_2/notification/local.css", "/Applications/MAMP/htdocs/FDAIN/vendor/symfony/twig-bridge/Resources/views/Email/zurb_2/notification/local.css");
    }
}
