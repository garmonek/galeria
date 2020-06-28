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

/* category/delete.html.twig */
class __TwigTemplate_f3d631761c1be8e2d02655408b14c8f084704354dfdfb7eb3c121f1bf771b04f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/delete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/delete.html.twig"));

        // line 1
        $this->loadTemplate("default/_form.html.twig", "category/delete.html.twig", 1)->display(twig_array_merge($context, ["page_title" => "title_category_delete", "page_title_param" => ["%id%" => twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)], "attr" => ["method" => "DELETE", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("category_delete", ["id" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)])], "form" =>         // line 8
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "submit_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete"), "back_to_list_path" => "category_index"]));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "category/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  45 => 6,  44 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'default/_form.html.twig' with {
    page_title: 'title_category_delete',
    page_title_param: {'%id%': category.id},
    attr: {
        method: 'DELETE',
        action: url('category_delete', {'id': category.id}),
    },
    form: form,
    submit_label: 'action_delete'|trans,
    back_to_list_path: 'category_index',
} %}", "category/delete.html.twig", "C:\\Users\\DELL XPS\\PhpstormProjects\\PROJEKT\\templates\\category\\delete.html.twig");
    }
}
