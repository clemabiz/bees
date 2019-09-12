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

/* profiles/varbase/themes/contrib/vartheme_bs4/templates/system/page.html.twig */
class __TwigTemplate_a157581cc8a684279165424c54064f39b3ae0d82f5a6859487c2b55f0941a056 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'hero_slider' => [$this, 'block_hero_slider'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 59, "if" => 62, "block" => 63];
        $filters = ["escape" => 99];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape'],
                []
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
        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 60
        $context["header_container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "header_container", [])) ? ("container-fluid header-margin") : ("container"));
        // line 62
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 63
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 96
        echo "
";
        // line 98
        echo "<div class=\"d-none d-print-block header-print page-header mt-4 mb-3\">
  <div class=\"";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        ";
        // line 103
        echo "        ";
        if (($context["logo_print"] ?? null)) {
            // line 104
            echo "          <img class=\"logo pull-left d-none d-print-inline-block\" src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo_print"] ?? null)), "html", null, true);
            echo "\" />
        ";
        }
        // line 106
        echo "      </div>
    </div>
  </div>
</div>

";
        // line 112
        if ($this->getAttribute(($context["page"] ?? null), "hero_slider", [])) {
            // line 113
            $this->displayBlock('hero_slider', $context, $blocks);
        }
        // line 119
        echo "
";
        // line 121
        $this->displayBlock('main', $context, $blocks);
        // line 200
        echo "
";
        // line 201
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 202
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 63
    public function block_navbar($context, array $blocks = [])
    {
        // line 64
        echo "    ";
        // line 65
        $context["navbar_classes"] = [0 => "mb-4", 1 => "border-bottom", 2 => "shadow-sm"];
        // line 71
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 72
        if (($context["container_navbar"] ?? null)) {
            // line 73
            echo "        <div class=\"container\">
      ";
        }
        // line 75
        echo "      <div class=\"navbar-brand mr-md-auto\">
        ";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
      </div>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-controls=\"navbar-collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>


      ";
        // line 83
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 84
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          <div class=\"navbar-nav ml-auto\">
            ";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 90
        echo "      ";
        if (($context["container_navbar"] ?? null)) {
            // line 91
            echo "        </div>
      ";
        }
        // line 93
        echo "    </header>
  ";
    }

    // line 113
    public function block_hero_slider($context, array $blocks = [])
    {
        // line 114
        echo "  <div class=\"hero_slider mt-n4\">
    ";
        // line 115
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "hero_slider", [])), "html", null, true);
        echo "
  </div>
";
    }

    // line 121
    public function block_main($context, array $blocks = [])
    {
        // line 122
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 126
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 127
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 132
            echo "      ";
        }
        // line 133
        echo "
      ";
        // line 135
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 136
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 141
            echo "      ";
        }
        // line 142
        echo "
      ";
        // line 144
        echo "      ";
        // line 145
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 146
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 147
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 148
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 149
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 152
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 155
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 156
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 159
            echo "        ";
        }
        // line 160
        echo "
        ";
        // line 162
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 163
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 166
            echo "        ";
        }
        // line 167
        echo "
        ";
        // line 169
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 170
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 173
            echo "        ";
        }
        // line 174
        echo "
        ";
        // line 176
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 177
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 180
            echo "        ";
        }
        // line 181
        echo "
        ";
        // line 183
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 187
        echo "      </section>

      ";
        // line 190
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 191
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 196
            echo "      ";
        }
        // line 197
        echo "    </div>
  </div>
";
    }

    // line 127
    public function block_header($context, array $blocks = [])
    {
        // line 128
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 129
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 136
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 137
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 138
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 156
    public function block_highlighted($context, array $blocks = [])
    {
        // line 157
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 163
    public function block_breadcrumb($context, array $blocks = [])
    {
        // line 164
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
        echo "
          ";
    }

    // line 170
    public function block_action_links($context, array $blocks = [])
    {
        // line 171
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
        echo "</ul>
          ";
    }

    // line 177
    public function block_help($context, array $blocks = [])
    {
        // line 178
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 183
    public function block_content($context, array $blocks = [])
    {
        // line 184
        echo "          <a id=\"main-content\"></a>
          ";
        // line 185
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 191
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 192
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 193
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 202
    public function block_footer($context, array $blocks = [])
    {
        // line 203
        echo "    <div class=\"footer-wrapper\">
      <footer class=\"footer ";
        // line 204
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
        ";
        // line 205
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
      </footer>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "profiles/varbase/themes/contrib/vartheme_bs4/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 205,  410 => 204,  407 => 203,  404 => 202,  397 => 193,  394 => 192,  391 => 191,  385 => 185,  382 => 184,  379 => 183,  372 => 178,  369 => 177,  362 => 171,  359 => 170,  352 => 164,  349 => 163,  342 => 157,  339 => 156,  332 => 138,  329 => 137,  326 => 136,  319 => 129,  316 => 128,  313 => 127,  307 => 197,  304 => 196,  301 => 191,  298 => 190,  294 => 187,  291 => 183,  288 => 181,  285 => 180,  282 => 177,  279 => 176,  276 => 174,  273 => 173,  270 => 170,  267 => 169,  264 => 167,  261 => 166,  258 => 163,  255 => 162,  252 => 160,  249 => 159,  246 => 156,  243 => 155,  237 => 152,  235 => 149,  234 => 148,  233 => 147,  232 => 146,  231 => 145,  229 => 144,  226 => 142,  223 => 141,  220 => 136,  217 => 135,  214 => 133,  211 => 132,  208 => 127,  205 => 126,  198 => 122,  195 => 121,  188 => 115,  185 => 114,  182 => 113,  177 => 93,  173 => 91,  170 => 90,  163 => 86,  159 => 84,  157 => 83,  147 => 76,  144 => 75,  140 => 73,  138 => 72,  133 => 71,  131 => 65,  129 => 64,  126 => 63,  120 => 202,  118 => 201,  115 => 200,  113 => 121,  110 => 119,  107 => 113,  105 => 112,  98 => 106,  92 => 104,  89 => 103,  83 => 99,  80 => 98,  77 => 96,  73 => 63,  71 => 62,  69 => 60,  67 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/varbase/themes/contrib/vartheme_bs4/templates/system/page.html.twig", "C:\\xampp\\htdocs\\bees\\profiles\\varbase\\themes\\contrib\\vartheme_bs4\\templates\\system\\page.html.twig");
    }
}
