<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* profiles/varbase/themes/contrib/vartheme_admin/templates/install/install-page.html.twig */
class __TwigTemplate_3600f4b1c9034e956f19ef58a53db099cdae7e8166ccd661343dbacfc8d43f3e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 15];
        $filters = ["escape" => 18];
        $functions = ["active_theme_path" => 20];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['active_theme_path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 12
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 15
        if (($context["site_name"] ?? null)) {
            // line 16
            echo "      <h1 class=\"page-title\">
        ";
            // line 17
            if (($context["profile_logo"] ?? null)) {
                // line 18
                echo "          <img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_logo"] ?? null)), "html", null, true);
                echo "\" class=\"installer-logo\">
        ";
            } else {
                // line 20
                echo "          <img src=\"../";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
                echo "/images/varbase-medium-logo.png\" class=\"installer-logo\">
        ";
            }
            // line 22
            echo "
        ";
            // line 23
            if (($context["site_version"] ?? null)) {
                // line 24
                echo "          <span class=\"site-version\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_version"] ?? null)), "html", null, true);
                echo "</span>
        ";
            }
            // line 26
            echo "      </h1>
    ";
        }
        // line 28
        echo "  </header>

  ";
        // line 30
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 31
            echo "    <aside class=\"layout-sidebar-first\" role=\"complementary\">
      ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
    </aside>";
            // line 34
            echo "  ";
        }
        // line 35
        echo "
  <main role=\"main\">
    ";
        // line 37
        if (($context["title"] ?? null)) {
            // line 38
            echo "      <h2>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h2>
    ";
        }
        // line 40
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
    ";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
  </main>

  ";
        // line 44
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 45
            echo "    <aside class=\"layout-sidebar-second\" role=\"complementary\">
      ";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
    </aside>";
            // line 48
            echo "  ";
        }
        // line 49
        echo "
</div>";
        // line 51
        echo "
<footer class=\"installer-footer clearfix\">
      <div id=\"credit\" class=\"clearfix\">
        <div class=\"message\">Proudly built by</div>
        <div class=\"logo\">
          <a href=\"http://www.vardot.com\" target=\"_blank\">Vardot Company</a>
        </div>
      </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "profiles/varbase/themes/contrib/vartheme_admin/templates/install/install-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 51,  145 => 49,  142 => 48,  138 => 46,  135 => 45,  133 => 44,  127 => 41,  122 => 40,  116 => 38,  114 => 37,  110 => 35,  107 => 34,  103 => 32,  100 => 31,  98 => 30,  94 => 28,  90 => 26,  84 => 24,  82 => 23,  79 => 22,  73 => 20,  67 => 18,  65 => 17,  62 => 16,  60 => 15,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/varbase/themes/contrib/vartheme_admin/templates/install/install-page.html.twig", "C:\\xampp\\htdocs\\bees\\profiles\\varbase\\themes\\contrib\\vartheme_admin\\templates\\install\\install-page.html.twig");
    }
}
