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

/* category/show.html.twig */
class __TwigTemplate_dd949b5dd98e3bc1506070992da3b4bc09f78574709a148134f95338fc277890 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/show.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_category_details", ["%id%" => ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 4), "")) : (""))]), "html", null, true);
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
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_category_details", ["%id%" => ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 8), "")) : (""))]), "html", null, true);
        echo "</h1>
    ";
        // line 9
        if (((isset($context["category"]) || array_key_exists("category", $context)) && twig_length_filter($this->env, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 9, $this->source); })())))) {
            // line 10
            echo "        <dl class=\"dl-horizontal\">
            <dt>";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_id"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
            echo "</dd>
            <dt>";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_created_at"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 14, $this->source); })()), "createdAt", [], "any", false, false, false, 14), "d.m.Y"), "html", null, true);
            echo "</dd>
            <dt>";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_updated_at"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 16, $this->source); })()), "updatedAt", [], "any", false, false, false, 16), "d.m.Y"), "html", null, true);
            echo "</dd>
            <dt>";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_title"), "html", null, true);
            echo "</dt>
            <dd>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</dd>
        </dl>
        ";
            // line 20
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 21
                echo "            <p>
                <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("category_edit", ["id" => ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 22), "")) : (""))]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_edit"), "html", null, true);
                echo "\"
                   class=\"btn btn-primary\">
                    ";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_edit"), "html", null, true);
                echo "
                </a>
                <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("category_delete", ["id" => ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 26), "")) : (""))]), "html", null, true);
                echo "\"
                   title=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete"), "html", null, true);
                echo "\" class=\"btn btn-danger\">
                    ";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_delete"), "html", null, true);
                echo "
                </a>
            </p>
            <p>
                <a href=\"";
                // line 32
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("wallpaper_create");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("upload_new_wallpaper"), "html", null, true);
                echo "\" class=\"btn btn-primary\">
                    ";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("upload_new_wallpaper"), "html", null, true);
                echo "
                </a>
            </p>
        ";
            }
            // line 37
            echo "        <p>
            <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("category_index");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_back_to_list_category"), "html", null, true);
            echo "\"
               class=\"btn btn-secondary\">
                ";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_back_to_list_category"), "html", null, true);
            echo "
            </a>
        </p>
    ";
        } else {
            // line 44
            echo "        <div class=\"alert alert-primary\" role=\"alert\">
            ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_item_not_found"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 48
        echo "
    ";
        // line 50
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_category_gallery"), "html", null, true);
        echo "</h2>
    <div class=\"row\">
        ";
        // line 52
        if (((isset($context["wallpaper"]) || array_key_exists("wallpaper", $context)) && twig_length_filter($this->env, (isset($context["wallpaper"]) || array_key_exists("wallpaper", $context) ? $context["wallpaper"] : (function () { throw new RuntimeError('Variable "wallpaper" does not exist.', 52, $this->source); })())))) {
            // line 53
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["wallpaper"]);
            foreach ($context['_seq'] as $context["_key"] => $context["wallpaper"]) {
                // line 54
                echo "                <div class=\"col-sm-6 col-md-4\">
                    <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("wallpaper_show", ["id" => twig_get_attribute($this->env, $this->source, $context["wallpaper"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\" class=\"thumbnail\">
                        <img src=\"";
                // line 56
                echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/") . twig_get_attribute($this->env, $this->source, $context["wallpaper"], "filename", [], "any", false, false, false, 56)), "html", null, true);
                echo "\" alt=\"...\" class=\"img-thumbnail\">
                    </a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wallpaper'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        ";
        } else {
            // line 61
            echo "            <p>
                ";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_item_not_found"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 65
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "category/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 65,  245 => 62,  242 => 61,  239 => 60,  229 => 56,  225 => 55,  222 => 54,  217 => 53,  215 => 52,  209 => 50,  206 => 48,  200 => 45,  197 => 44,  190 => 40,  183 => 38,  180 => 37,  173 => 33,  167 => 32,  160 => 28,  156 => 27,  152 => 26,  147 => 24,  140 => 22,  137 => 21,  135 => 20,  130 => 18,  126 => 17,  122 => 16,  118 => 15,  114 => 14,  110 => 13,  106 => 12,  102 => 11,  99 => 10,  97 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ 'title_category_details'|trans({'%id%': category.id|default('')}) }}
{% endblock %}

{% block body %}
    <h1>{{ 'title_category_details'|trans({'%id%': category.id|default('')}) }}</h1>
    {% if category is defined and category|length %}
        <dl class=\"dl-horizontal\">
            <dt>{{ 'label_id'|trans }}</dt>
            <dd>{{ category.id }}</dd>
            <dt>{{ 'label_created_at'|trans }}</dt>
            <dd>{{ category.createdAt|date('d.m.Y') }}</dd>
            <dt>{{ 'label_updated_at'|trans }}</dt>
            <dd>{{ category.updatedAt|date('d.m.Y') }}</dd>
            <dt>{{ 'label_title'|trans }}</dt>
            <dd>{{ category.title }}</dd>
        </dl>
        {% if is_granted('ROLE_ADMIN') %}
            <p>
                <a href=\"{{ url('category_edit',{'id': category.id|default('')}) }}\" title=\"{{ 'action_edit'|trans }}\"
                   class=\"btn btn-primary\">
                    {{ 'action_edit'|trans }}
                </a>
                <a href=\"{{ url('category_delete',{'id': category.id|default('')}) }}\"
                   title=\"{{ 'action_delete'|trans }}\" class=\"btn btn-danger\">
                    {{ 'action_delete'|trans }}
                </a>
            </p>
            <p>
                <a href=\"{{ url('wallpaper_create') }}\" title=\"{{ 'upload_new_wallpaper'|trans }}\" class=\"btn btn-primary\">
                    {{ 'upload_new_wallpaper'|trans }}
                </a>
            </p>
        {% endif %}
        <p>
            <a href=\"{{ url('category_index') }}\" title=\"{{ 'action_back_to_list_category'|trans }}\"
               class=\"btn btn-secondary\">
                {{ 'action_back_to_list_category'|trans }}
            </a>
        </p>
    {% else %}
        <div class=\"alert alert-primary\" role=\"alert\">
            {{ 'message_item_not_found'|trans }}
        </div>
    {% endif %}

    {# wyświetlanie zdjęć jako galerii #}
    <h2>{{ 'title_category_gallery'|trans }}</h2>
    <div class=\"row\">
        {% if wallpaper is defined and wallpaper|length %}
            {% for wallpaper in wallpaper %}
                <div class=\"col-sm-6 col-md-4\">
                    <a href=\"{{ url('wallpaper_show', {id: wallpaper.id}) }}\" class=\"thumbnail\">
                        <img src=\"{{ asset('images/') ~ wallpaper.filename }}\" alt=\"...\" class=\"img-thumbnail\">
                    </a>
                </div>
            {% endfor %}
        {% else %}
            <p>
                {{ 'message_item_not_found'|trans }}
            </p>
        {% endif %}
    </div>

{% endblock %}", "category/show.html.twig", "C:\\Users\\DELL XPS\\PhpstormProjects\\PROJEKT\\templates\\category\\show.html.twig");
    }
}
