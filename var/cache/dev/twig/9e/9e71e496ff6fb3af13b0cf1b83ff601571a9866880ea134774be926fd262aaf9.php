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

/* header.html.twig */
class __TwigTemplate_ab6da2a9b562200615e4b5f56839cda06de75a9000efedffa40070cdac0e29a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<header>
    <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark\">
        <div class=\"container\">

            <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home"), "html", null, true);
        echo "</a>

            <div class=\"collapse navbar-collapse\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wallpaper_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_wallpaper_list"), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_category_list"), "html", null, true);
        echo "</a>
                    </li>
                </ul>
            </div>
        </div>
        ";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 19
            echo "            <p class=\"btn btn-sm btn-outline-secondary mr-2\" type=\"button\">
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" id=\"login\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
            echo "</a
            </p>
            <p class=\"btn btn-sm btn-outline-secondary\" type=\"button\">
                <a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_logout");
            echo "\" id=\"login\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_logout"), "html", null, true);
            echo "</a>
            </p>
        ";
        } else {
            // line 26
            echo "            <div class=\"btn btn-sm btn-outline-secondary\" type=\"button\">
                <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_login");
            echo "\" id=\"login\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_login"), "html", null, true);
            echo "</a>
            </div>
        ";
        }
        // line 30
        echo "

    </nav>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  101 => 27,  98 => 26,  90 => 23,  82 => 20,  79 => 19,  77 => 18,  67 => 13,  59 => 10,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark\">
        <div class=\"container\">

            <a class=\"navbar-brand\" href=\"{{ path('home') }}\">{{ 'home'|trans }}</a>

            <div class=\"collapse navbar-collapse\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('wallpaper_index') }}\">{{ 'title_wallpaper_list'|trans }}</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('category_index') }}\">{{ 'title_category_list'|trans }}</a>
                    </li>
                </ul>
            </div>
        </div>
        {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
            <p class=\"btn btn-sm btn-outline-secondary mr-2\" type=\"button\">
                <a href=\"{{ url('admin_edit', {id: app.user.id}) }}\" id=\"login\">{{ app.user.email }}</a
            </p>
            <p class=\"btn btn-sm btn-outline-secondary\" type=\"button\">
                <a href=\"{{ url('app_logout') }}\" id=\"login\">{{ 'action_logout'|trans }}</a>
            </p>
        {% else %}
            <div class=\"btn btn-sm btn-outline-secondary\" type=\"button\">
                <a href=\"{{ url('app_login') }}\" id=\"login\">{{ 'action_login'|trans }}</a>
            </div>
        {% endif %}


    </nav>
</header>", "header.html.twig", "C:\\Users\\DELL XPS\\PhpstormProjects\\PROJEKT\\templates\\header.html.twig");
    }
}
