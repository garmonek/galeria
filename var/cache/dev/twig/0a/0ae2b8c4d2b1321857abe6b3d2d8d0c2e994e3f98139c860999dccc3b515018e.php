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

/* wallpaper/index.html.twig */
class __TwigTemplate_86838e3bd272541e0839e7acd51a7af112944daa620de7b7e388ef00dd588302 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wallpaper/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wallpaper/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "wallpaper/index.html.twig", 1);
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

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_wallpaper_list"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1 class=\"float-sm-left\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_wallpaper_list"), "html", null, true);
        echo "</h1>
    ";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("wallpaper_create");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("upload_new_wallpaper"), "html", null, true);
            echo "\" class=\"btn btn-primary float-sm-right\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("upload_new_wallpaper"), "html", null, true);
            echo "
    </a>
    ";
        }
        // line 14
        echo "    ";
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context)) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 14, $this->source); })()), "items", [], "any", false, false, false, 14)))) {
            // line 15
            echo "
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>";
            // line 19
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 19, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_id"), "wallpaper.id");
            echo "</th>
                <th>";
            // line 20
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 20, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_created_at"), "wallpaper.createdAt");
            echo "</th>
                <th>";
            // line 21
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 21, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_updated_at"), "wallpaper.updatedAt");
            echo "</th>
                <th>";
            // line 22
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 22, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_title"), "wallpaper.title");
            echo "</th>
                <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_category"), "html", null, true);
            echo "</th>
                <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_actions"), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 28, $this->source); })()), "items", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["wallpaper"]) {
                // line 29
                echo "                <tr>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wallpaper"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                    <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wallpaper"], "createdAt", [], "any", false, false, false, 31), "d.m.Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wallpaper"], "updatedAt", [], "any", false, false, false, 32), "d.m.Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wallpaper"], "title", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["wallpaper"], "category", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                    <td>
                        <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("wallpaper_show", ["id" => twig_get_attribute($this->env, $this->source, $context["wallpaper"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_view"), "html", null, true);
                echo "\" class=\"btn btn-info\">
                            ";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_view"), "html", null, true);
                echo "
                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallpaper'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            </tbody>
        </table>

        <div class=\"navigation text-center\">
            ";
            // line 46
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 46, $this->source); })()));
            echo "
        </div>

    ";
        } else {
            // line 50
            echo "        <div class=\"alert alert-primary\" role=\"alert\" id=\"empty_message\">
            ";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_empty_list"), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "wallpaper/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 51,  206 => 50,  199 => 46,  193 => 42,  182 => 37,  176 => 36,  171 => 34,  167 => 33,  163 => 32,  159 => 31,  155 => 30,  152 => 29,  148 => 28,  141 => 24,  137 => 23,  133 => 22,  129 => 21,  125 => 20,  121 => 19,  115 => 15,  112 => 14,  106 => 11,  99 => 10,  97 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ 'title_wallpaper_list'|trans }}
{% endblock %}

{% block body %}
    <h1 class=\"float-sm-left\">{{ 'title_wallpaper_list'|trans }}</h1>
    {% if is_granted('ROLE_ADMIN') %}
    <a href=\"{{ url('wallpaper_create') }}\" title=\"{{ 'upload_new_wallpaper'|trans }}\" class=\"btn btn-primary float-sm-right\">
        {{ 'upload_new_wallpaper'|trans }}
    </a>
    {% endif %}
    {% if pagination is defined and pagination.items|length %}

        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>{{ knp_pagination_sortable(pagination, 'label_id'|trans, 'wallpaper.id') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'label_created_at'|trans, 'wallpaper.createdAt') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'label_updated_at'|trans, 'wallpaper.updatedAt') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'label_title'|trans, 'wallpaper.title') }}</th>
                <th>{{ 'label_category'|trans }}</th>
                <th>{{ 'label_actions'|trans }}</th>
            </tr>
            </thead>
            <tbody>
            {% for wallpaper in pagination.items %}
                <tr>
                    <td>{{ wallpaper.id }}</td>
                    <td>{{ wallpaper.createdAt|date('d.m.Y') }}</td>
                    <td>{{ wallpaper.updatedAt|date('d.m.Y') }}</td>
                    <td>{{ wallpaper.title }}</td>
                    <td>{{ wallpaper.category.title }}</td>
                    <td>
                        <a href=\"{{ url('wallpaper_show', {id: wallpaper.id}) }}\" title=\"{{ 'action_view'|trans }}\" class=\"btn btn-info\">
                            {{ 'action_view'|trans }}
                        </a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <div class=\"navigation text-center\">
            {{ knp_pagination_render(pagination) }}
        </div>

    {% else %}
        <div class=\"alert alert-primary\" role=\"alert\" id=\"empty_message\">
            {{ 'message_empty_list'|trans }}
        </div>
    {% endif %}
{% endblock %}", "wallpaper/index.html.twig", "C:\\Users\\DELL XPS\\PhpstormProjects\\PROJEKT\\templates\\wallpaper\\index.html.twig");
    }
}
