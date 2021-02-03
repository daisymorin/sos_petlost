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

/* front/default/show-perdu.html.twig */
class __TwigTemplate_551fb54c07ce04d4dee047be194aed5fc562ea381876754dfb6ba0896d0cec94 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/default/show-perdu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/default/show-perdu.html.twig"));

        $this->parent = $this->loadTemplate("front/layout.html.twig", "front/default/show-perdu.html.twig", 1);
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

        echo "SOS PETLOST";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <div class=\"\">
        <p>";
        // line 8
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 8, $this->source); })()), "missing", [], "any", false, false, false, 8)) ? ("Perdu") : (""));
        echo "</p>
        <p><img class=\"imgAnimal\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9), "file"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "\" /></p>
        <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
        <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 11, $this->source); })()), "race", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
        <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 12, $this->source); })()), "sexe", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
        <p>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 13, $this->source); })()), "color", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
        <p>";
        // line 14
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 14, $this->source); })()), "microship", [], "any", false, false, false, 14)) ? ("Oui") : ("Non"));
        echo "</p>
        <p>";
        // line 15
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 15, $this->source); })()), "sterelise", [], "any", false, false, false, 15)) ? ("Oui") : ("Non"));
        echo "</p>
        <p>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
        <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 17, $this->source); })()), "particularity", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
        <p>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 18, $this->source); })()), "address", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
        <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 19, $this->source); })()), "postcode", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
        <p>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 20, $this->source); })()), "city", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
        <p>";
        // line 21
        ((twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 21, $this->source); })()), "date", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 21, $this->source); })()), "date", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true))) : (print ("")));
        echo "</p>
    

        <p><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Retour à l'accueil</a></p>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/default/show-perdu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 24,  146 => 21,  142 => 20,  138 => 19,  134 => 18,  130 => 17,  126 => 16,  122 => 15,  118 => 14,  114 => 13,  110 => 12,  106 => 11,  102 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/layout.html.twig' %}

{% block title %}SOS PETLOST{% endblock %}

{% block content %}

    <div class=\"\">
        <p>{{ animal.missing ? 'Perdu' : '' }}</p>
        <p><img class=\"imgAnimal\" src=\"{{ vich_uploader_asset(animal.image, 'file') }}\" alt=\"{{ animal.name }}\" /></p>
        <p>{{ animal.name }}</p>
        <p>{{ animal.race }}</p>
        <p>{{ animal.sexe }}</p>
        <p>{{ animal.color }}</p>
        <p>{{ animal.microship ? 'Oui' : 'Non' }}</p>
        <p>{{ animal.sterelise ? 'Oui' : 'Non' }}</p>
        <p>{{ animal.description }}</p>
        <p>{{ animal.particularity }}</p>
        <p>{{ animal.address }}</p>
        <p>{{ animal.postcode }}</p>
        <p>{{ animal.city }}</p>
        <p>{{ animal.date ? animal.date|date('d/m/Y') : '' }}</p>
    

        <p><a href=\"{{ path('home') }}\">Retour à l'accueil</a></p>

    </div>

{% endblock %}", "front/default/show-perdu.html.twig", "/opt/lampp/htdocs/sos_petlost/templates/front/default/show-perdu.html.twig");
    }
}
