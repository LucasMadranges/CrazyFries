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

/* register/index.html.twig */
class __TwigTemplate_b16ee0c307fae8559a8a8192a5e9f5a82762d6ebd23af3c9a04ca1b6cf6593af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "register/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "- Inscription
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<style>
\t\t.toutout {
\t\t\tbackground-image: url('";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg.svg"), "html", null, true);
        echo "');
\t\t\tbackground-repeat: no-repeat;
\t\t\tbackground-size: cover;
\t\t\tbackground-position: top center;
\t\t}
\t</style>
\t";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "


\t<form class=\"mx-1 mx-md-4\">

\t\t<div class=\"toutout\">
\t\t\t<div class=\"filtre\"></div>

\t\t\t<div class=\"tout\">
\t\t\t\t<div class=\"tout-logo\">
\t\t\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo/logo.svg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t</div>

\t\t\t\t<div class=\"tout-connexion\">
\t\t\t\t\t<h1 class=\"h3 mb-3 font-weight-normal tconnexion\">INSCRIPTION</h1>

\t\t\t\t\t<div class=\"co\">

\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'row');
        echo "
\t\t\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "password", [], "any", false, false, false, 34), "first", [], "any", false, false, false, 34), 'row');
        echo "
\t\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "password", [], "any", false, false, false, 35), "second", [], "any", false, false, false, 35), 'row');
        echo "


\t\t\t\t\t\t<div class=\"d-flex justify-content-center mx-4 mb-3 mb-lg-4\">
\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "_token", [], "any", false, false, false, 39), 'row');
        echo "
\t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "submit", [], "any", false, false, false, 40), 'row');
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"inscr\">
\t\t\t\t\t\t<div class=\"trait\"></div>
\t\t\t\t\t\t<a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
\t\t\t\t\t\t\tSe connecter
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t</form>

\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'rest');
        echo "
\t";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "register/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 60,  155 => 59,  140 => 47,  130 => 40,  126 => 39,  119 => 35,  115 => 34,  111 => 33,  100 => 25,  87 => 15,  78 => 9,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}- Inscription
{% endblock %}

{% block body %}
\t<style>
\t\t.toutout {
\t\t\tbackground-image: url('{{ asset('assets/img/bg.svg') }}');
\t\t\tbackground-repeat: no-repeat;
\t\t\tbackground-size: cover;
\t\t\tbackground-position: top center;
\t\t}
\t</style>
\t{{form_start(form)}}


\t<form class=\"mx-1 mx-md-4\">

\t\t<div class=\"toutout\">
\t\t\t<div class=\"filtre\"></div>

\t\t\t<div class=\"tout\">
\t\t\t\t<div class=\"tout-logo\">
\t\t\t\t\t<img src=\"{{ asset('assets/img/logo/logo.svg') }}\" alt=\"\">
\t\t\t\t</div>

\t\t\t\t<div class=\"tout-connexion\">
\t\t\t\t\t<h1 class=\"h3 mb-3 font-weight-normal tconnexion\">INSCRIPTION</h1>

\t\t\t\t\t<div class=\"co\">

\t\t\t\t\t\t{{ form_row(form.email) }}
\t\t\t\t\t\t{{ form_row(form.password.first) }}
\t\t\t\t\t\t{{ form_row(form.password.second) }}


\t\t\t\t\t\t<div class=\"d-flex justify-content-center mx-4 mb-3 mb-lg-4\">
\t\t\t\t\t\t\t{{ form_row(form._token) }}
\t\t\t\t\t\t\t{{ form_row(form.submit) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"inscr\">
\t\t\t\t\t\t<div class=\"trait\"></div>
\t\t\t\t\t\t<a href=\"{{path(\"app_home\")}}\">
\t\t\t\t\t\t\tSe connecter
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t</form>

\t{{ form_rest(form) }}
\t{{form_end(form)}}
{% endblock %}
", "register/index.html.twig", "C:\\MAMP\\htdocs\\CrazyFries\\templates\\register\\index.html.twig");
    }
}
