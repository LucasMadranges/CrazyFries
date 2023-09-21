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

/* menu/index.html.twig */
class __TwigTemplate_00dcc90611021721a63e120b01b4fcede1f07f411acbd094f028d78e8afae7e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'script' => [$this, 'block_script'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "menu/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "- Menu";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <section id=\"our_menu\" class=\"pt-5 pb-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"page_title text-center mb-4\">
\t\t\t\t\t\t<h1>Notre menu</h1>
\t\t\t\t\t\t<div class=\"single_line\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<ul class=\"nav nav-tabs menu_tab mb-4\" id=\"nav-tab\" role=\"tablist\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" id=\"pain-tab\" href=\"#\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-pain\" type=\"button\" role=\"tab\" aria-controls=\"nav-pain\" aria-selected=\"true\">Pain</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link disabled\" id=\"viande-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-viande\" type=\"button\" role=\"tab\" aria-controls=\"nav-viande\" aria-selected=\"false\">Viande</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link disabled\" id=\"sauce-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-sauce\" type=\"button\" role=\"tab\" aria-controls=\"nav-sauce\" aria-selected=\"false\">Sauce</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link disabled\" id=\"frites-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-frites\" type=\"button\" role=\"tab\" aria-controls=\"nav-frites\" aria-selected=\"false\">Frites</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link disabled\" id=\"boisson-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-boisson\" type=\"button\" role=\"tab\" aria-controls=\"nav-boisson\" aria-selected=\"false\">Boisson</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
        \t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"tab-content col-lg-12\" id=\"myTabContent\">
\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"nav-pain\" role=\"tabpanel\" aria-labelledby=\"pain-tab\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"baguette\">
                                <input type=\"radio\" id=\"baguette\" class=\"radio-hidden\" name=\"radio\" value=\"baguette\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/kbpceNv.jpg\" alt=\"baguette\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Baguette  <span>1€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"burger\">
                                <input type=\"radio\" id=\"burger\" class=\"radio-hidden\" name=\"radio\" value=\"burger\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"burger\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Burger  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"aucunP\">
                                <input type=\"radio\" id=\"aucunP\" class=\"radio-hidden\" name=\"radio\" value=\"aucunP\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"aucunP\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Aucun pain  <span>0€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"nav-viande\" role=\"tabpanel\" aria-labelledby=\"viande-tab\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"merguez\">
                                <input type=\"radio\" id=\"merguez\" class=\"radio-hidden\" name=\"radio\" value=\"merguez\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/kbpceNv.jpg\" alt=\"merguez\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Merguez  <span>1€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"fricandelle\">
                                <input type=\"radio\" id=\"fricandelle\" class=\"radio-hidden\" name=\"radio\" value=\"fricandelle\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"fricandelle\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Fricandelle  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"steak\">
                                <input type=\"radio\" id=\"steak\" class=\"radio-hidden\" name=\"radio\" value=\"steak\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"steak\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Steak  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"poulet\">
                                <input type=\"radio\" id=\"poulet\" class=\"radio-hidden\" name=\"radio\" value=\"poulet\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"poulet\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Poulet  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"nav-sauce\" role=\"tabpanel\" aria-labelledby=\"sauce-tab\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"ketchup\">
                                <input type=\"radio\" id=\"ketchup\" class=\"radio-hidden\" name=\"radio\" value=\"ketchup\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/kbpceNv.jpg\" alt=\"ketchup\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Ketchup  <span>1€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"mayo\">
                                <input type=\"radio\" id=\"mayo\" class=\"radio-hidden\" name=\"radio\" value=\"mayo\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"mayo\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Mayo  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"moutarde\">
                                <input type=\"radio\" id=\"moutarde\" class=\"radio-hidden\" name=\"radio\" value=\"moutarde\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"moutarde\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Moutarde  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"nav-frites\" role=\"tabpanel\" aria-labelledby=\"frites-tab\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"petite\">
                                <input type=\"radio\" id=\"petite\" class=\"radio-hidden\" name=\"radio\" value=\"petite\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/kbpceNv.jpg\" alt=\"petite\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Petite frites  <span>1€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"moyenne\">
                                <input type=\"radio\" id=\"moyenne\" class=\"radio-hidden\" name=\"radio\" value=\"moyenne\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"moyenne\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Moyenne frites  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"grande\">
                                <input type=\"radio\" id=\"grande\" class=\"radio-hidden\" name=\"radio\" value=\"grande\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"grande\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Grande frites  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"aucuneF\">
                                <input type=\"radio\" id=\"aucun\" class=\"radio-hidden\" name=\"radio\" value=\"aucuneF\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"aucuneF\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Aucune frites  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"nav-boisson\" role=\"tabpanel\" aria-labelledby=\"boisson-tab\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"soda\">
                                <input type=\"radio\" id=\"soda\" class=\"radio-hidden\" name=\"radio\" value=\"soda\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/kbpceNv.jpg\" alt=\"soda\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Soda  <span>1€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"eau\">
                                <input type=\"radio\" id=\"eau\" class=\"radio-hidden\" name=\"radio\" value=\"eau\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"eau\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Eau  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"orange\">
                                <input type=\"radio\" id=\"orange\" class=\"radio-hidden\" name=\"radio\" value=\"orange\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"orange\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Jus d'orange  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"aucuneB\">
                                <input type=\"radio\" id=\"aucun\" class=\"radio-hidden\" name=\"radio\" value=\"aucuneB\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"aucuneB\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Aucune boisson  <span>0€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-buttons d-flex justify-content-center\">
\t\t\t<a href=\"#\" class=\" menu_btn btn btn-danger return-btn\">Retour</a>
            <a href=\"#\" class=\" menu_btn btn btn-danger valid-btn\">Valider</a>
        </div>
\t</section>

\t<!-- Button trigger modal -->
<button type=\"button\" class=\"btn btn-primary btn-hidden\" id=\"btn-modal-valid\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
\t  \t<div class=\"d-flex justify-content-center align-items-center\">
        \t<button type=\"button\" class=\"btn btn-secondary btn-modal\" id=\"exit-modal\" data-bs-dismiss=\"modal\">Fermer</button>
        \t<button type=\"button\" class=\"btn btn-primary btn-modal\" id=\"add-order\">Ajouter une commande</button>
\t\t\t<form action=\"http://crazyfries/menu/save\" method=\"get\">
\t\t\t\t<input type=\"hidden\" id=\"hidden-data\" name=\"hidden-data\">
\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-modal\" id=\"end-order\">Finaliser la commande</button>
\t\t\t\t<button type=\"submit\" class=\"hidden-btn\" id=\"submit-end-order\"></button>
\t\t\t</form>
\t\t</div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 276
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/menu.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "menu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 276,  134 => 12,  124 => 11,  105 => 9,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}- Menu{% endblock %}

{% block css %}
<link rel=\"stylesheet\" href=\"{{asset('assets/css/menu.css')}}\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
{% endblock %}
{% block script %}<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>{% endblock %}

{% block body %}
    <section id=\"our_menu\" class=\"pt-5 pb-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"page_title text-center mb-4\">
\t\t\t\t\t\t<h1>Notre menu</h1>
\t\t\t\t\t\t<div class=\"single_line\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<ul class=\"nav nav-tabs menu_tab mb-4\" id=\"nav-tab\" role=\"tablist\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" id=\"pain-tab\" href=\"#\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-pain\" type=\"button\" role=\"tab\" aria-controls=\"nav-pain\" aria-selected=\"true\">Pain</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link disabled\" id=\"viande-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-viande\" type=\"button\" role=\"tab\" aria-controls=\"nav-viande\" aria-selected=\"false\">Viande</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link disabled\" id=\"sauce-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-sauce\" type=\"button\" role=\"tab\" aria-controls=\"nav-sauce\" aria-selected=\"false\">Sauce</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link disabled\" id=\"frites-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-frites\" type=\"button\" role=\"tab\" aria-controls=\"nav-frites\" aria-selected=\"false\">Frites</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link disabled\" id=\"boisson-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-boisson\" type=\"button\" role=\"tab\" aria-controls=\"nav-boisson\" aria-selected=\"false\">Boisson</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
        \t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"tab-content col-lg-12\" id=\"myTabContent\">
\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"nav-pain\" role=\"tabpanel\" aria-labelledby=\"pain-tab\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"baguette\">
                                <input type=\"radio\" id=\"baguette\" class=\"radio-hidden\" name=\"radio\" value=\"baguette\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/kbpceNv.jpg\" alt=\"baguette\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Baguette  <span>1€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"burger\">
                                <input type=\"radio\" id=\"burger\" class=\"radio-hidden\" name=\"radio\" value=\"burger\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"burger\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Burger  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"aucunP\">
                                <input type=\"radio\" id=\"aucunP\" class=\"radio-hidden\" name=\"radio\" value=\"aucunP\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"aucunP\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Aucun pain  <span>0€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"nav-viande\" role=\"tabpanel\" aria-labelledby=\"viande-tab\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"merguez\">
                                <input type=\"radio\" id=\"merguez\" class=\"radio-hidden\" name=\"radio\" value=\"merguez\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/kbpceNv.jpg\" alt=\"merguez\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Merguez  <span>1€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"fricandelle\">
                                <input type=\"radio\" id=\"fricandelle\" class=\"radio-hidden\" name=\"radio\" value=\"fricandelle\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"fricandelle\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Fricandelle  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"steak\">
                                <input type=\"radio\" id=\"steak\" class=\"radio-hidden\" name=\"radio\" value=\"steak\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"steak\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Steak  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"poulet\">
                                <input type=\"radio\" id=\"poulet\" class=\"radio-hidden\" name=\"radio\" value=\"poulet\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"poulet\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Poulet  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"nav-sauce\" role=\"tabpanel\" aria-labelledby=\"sauce-tab\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"ketchup\">
                                <input type=\"radio\" id=\"ketchup\" class=\"radio-hidden\" name=\"radio\" value=\"ketchup\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/kbpceNv.jpg\" alt=\"ketchup\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Ketchup  <span>1€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"mayo\">
                                <input type=\"radio\" id=\"mayo\" class=\"radio-hidden\" name=\"radio\" value=\"mayo\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"mayo\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Mayo  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"moutarde\">
                                <input type=\"radio\" id=\"moutarde\" class=\"radio-hidden\" name=\"radio\" value=\"moutarde\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"moutarde\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Moutarde  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"nav-frites\" role=\"tabpanel\" aria-labelledby=\"frites-tab\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"petite\">
                                <input type=\"radio\" id=\"petite\" class=\"radio-hidden\" name=\"radio\" value=\"petite\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/kbpceNv.jpg\" alt=\"petite\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Petite frites  <span>1€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"moyenne\">
                                <input type=\"radio\" id=\"moyenne\" class=\"radio-hidden\" name=\"radio\" value=\"moyenne\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"moyenne\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Moyenne frites  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"grande\">
                                <input type=\"radio\" id=\"grande\" class=\"radio-hidden\" name=\"radio\" value=\"grande\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"grande\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Grande frites  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"aucuneF\">
                                <input type=\"radio\" id=\"aucun\" class=\"radio-hidden\" name=\"radio\" value=\"aucuneF\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"aucuneF\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Aucune frites  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"nav-boisson\" role=\"tabpanel\" aria-labelledby=\"boisson-tab\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"soda\">
                                <input type=\"radio\" id=\"soda\" class=\"radio-hidden\" name=\"radio\" value=\"soda\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/kbpceNv.jpg\" alt=\"soda\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Soda  <span>1€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"eau\">
                                <input type=\"radio\" id=\"eau\" class=\"radio-hidden\" name=\"radio\" value=\"eau\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"eau\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Eau  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"orange\">
                                <input type=\"radio\" id=\"orange\" class=\"radio-hidden\" name=\"radio\" value=\"orange\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"orange\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Jus d'orange  <span>2€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 zone-menu\" tabindex=\"0\" data-f=\"aucuneB\">
                                <input type=\"radio\" id=\"aucun\" class=\"radio-hidden\" name=\"radio\" value=\"aucuneB\" />
\t\t\t\t\t\t\t\t<div class=\"single_menu\">
\t\t\t\t\t\t\t\t\t<img src=\"https://i.imgur.com/TAq7lDR.jpg\" alt=\"aucuneB\">
\t\t\t\t\t\t\t\t\t<div class=\"menu_content\">
\t\t\t\t\t\t\t\t\t\t<h4>Aucune boisson  <span>0€</span></h4>
\t\t\t\t\t\t\t\t\t\t<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-buttons d-flex justify-content-center\">
\t\t\t<a href=\"#\" class=\" menu_btn btn btn-danger return-btn\">Retour</a>
            <a href=\"#\" class=\" menu_btn btn btn-danger valid-btn\">Valider</a>
        </div>
\t</section>

\t<!-- Button trigger modal -->
<button type=\"button\" class=\"btn btn-primary btn-hidden\" id=\"btn-modal-valid\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
\t  \t<div class=\"d-flex justify-content-center align-items-center\">
        \t<button type=\"button\" class=\"btn btn-secondary btn-modal\" id=\"exit-modal\" data-bs-dismiss=\"modal\">Fermer</button>
        \t<button type=\"button\" class=\"btn btn-primary btn-modal\" id=\"add-order\">Ajouter une commande</button>
\t\t\t<form action=\"http://crazyfries/menu/save\" method=\"get\">
\t\t\t\t<input type=\"hidden\" id=\"hidden-data\" name=\"hidden-data\">
\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-modal\" id=\"end-order\">Finaliser la commande</button>
\t\t\t\t<button type=\"submit\" class=\"hidden-btn\" id=\"submit-end-order\"></button>
\t\t\t</form>
\t\t</div>
      </div>
    </div>
  </div>
</div>
{% endblock %}

{% block js %}<script src=\"{{asset(\"assets/js/menu.js\")}}\"></script>{% endblock %}
", "menu/index.html.twig", "C:\\MAMP\\htdocs\\CrazyFries\\templates\\menu\\index.html.twig");
    }
}
