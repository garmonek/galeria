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

/* wallpaper/edit.html.twig */
class __TwigTemplate_05580acb2117b5be985e4ad9c84c11db917f7b74a25c6e511be42e44fae70d7a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wallpaper/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wallpaper/edit.html.twig"));

        // line 1
        $this->loadTemplate("default/_form.html.twig", "wallpaper/edit.html.twig", 1)->display(twig_array_merge($context, ["page_title" => "title_wallpaper_edit", "page_title_param" => ["%id%" => twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)], "attr" => ["method" => "PUT", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("wallpaper_edit", ["id" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)])], "form" =>         // line 8
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "back_to_list_path" => "wallpaper_index"]));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "wallpaper/edit.html.twig";
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
    page_title: 'title_wallpaper_edit',
    page_title_param: {'%id%': wallpaper.id},
    attr: {
        method: 'PUT',
        action: url('wallpaper_edit', {'id': wallpaper.id}),
    },
    form: form,
    back_to_list_path: 'wallpaper_index',
} %}", "wallpaper/edit.html.twig", "C:\\Users\\DELL XPS\\PhpstormProjects\\PROJEKT\\templates\\wallpaper\\edit.html.twig");
    }
}
