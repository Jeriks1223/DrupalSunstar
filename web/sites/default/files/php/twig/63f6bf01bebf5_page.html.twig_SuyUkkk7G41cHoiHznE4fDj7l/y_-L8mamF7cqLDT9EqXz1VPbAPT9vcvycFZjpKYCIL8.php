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

/* themes/contrib/january_theme/templates/layout/page.html.twig */
class __TwigTemplate_9a0d060b5374a6c6cb6c0f990f336cc8 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "

";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 50) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 50))) {
            // line 51
            echo "\t";
            // line 52
            echo "\t<div class=\"topbar\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<p>Please visit our
\t\t\t\t\t\t<a href='#'>biography directory</a>
\t\t\t\t\t\tor call the main office at
\t\t\t\t\t\t<a href=\"tel:+";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 59, $this->source), "html", null, true);
            echo "\">+";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 59, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<ul class=\"social-links\">
\t\t\t\t\t\t<li class='facebook'>
\t\t\t\t\t\t\t<a href=\"";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_facebook"] ?? null), 65, $this->source), "html", null, true);
            echo "\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class='twitter'>
\t\t\t\t\t\t\t<a href=\"";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_twitter"] ?? null), 70, $this->source), "html", null, true);
            echo "\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class='insta'>
\t\t\t\t\t\t\t<a href=\"";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_instagram"] ?? null), 75, $this->source), "html", null, true);
            echo "\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class='youtube'>
\t\t\t\t\t\t\t<a href=\"";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_youtube"] ?? null), 80, $this->source), "html", null, true);
            echo "\" target='_blank'>
\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<header id=\"header\" class=\"site-header sticky-top\" data-drupal-selector=\"site-header\">
\t\t";
            // line 92
            echo "\t\t<nav class=\"navbar\">
\t\t\t<div class=\"container\">
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarScroll\" aria-controls=\"navbarScroll\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<svg class=\"open-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"28\" viewbox=\"0 0 48 28\">
\t\t\t\t\t\t<g transform=\"translate(-205 -94)\">
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(205 94)\" fill=\"#284544\"/>
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(205 106)\" fill=\"#284544\"/>
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(205 118)\" fill=\"#284544\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t</svg>

\t\t\t\t\t<svg class=\"close-icon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"38.348\" height=\"35.091\" viewbox=\"0 0 38.348 35.091\">
\t\t\t\t\t\t<g transform=\"translate(-209.826 -73.455)\">
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(212.503 73.455) rotate(42)\" fill=\"#284544\"/>
\t\t\t\t\t\t\t<rect width=\"48\" height=\"4\" rx=\"2\" transform=\"translate(248.174 76.427) rotate(138)\" fill=\"#284544\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t</svg>

\t\t\t\t</button>
\t\t\t\t";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarScroll\">
\t\t\t\t\t";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "
\t\t\t\t\t<p>January Portfolio Management Pty Ltd
\t\t\t\t\t\t<a href=\"mailto:";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_email"] ?? null), 115, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_email"] ?? null), 115, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t\t<a href=\"tel:+";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 116, $this->source), "html", null, true);
            echo "\">+";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 116, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>
";
        }
        // line 123
        echo "
";
        // line 124
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 124) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 124))) {
            // line 125
            echo "<div class='page-highlighted'>
\t";
            // line 126
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
            echo "
\t";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page", [], "any", false, false, true, 127), "secondary_menu", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
            echo "
</div>
";
        }
        // line 130
        echo "
";
        // line 131
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 131)) {
            // line 132
            echo "\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "
";
        }
        // line 134
        echo "

<main role=\"main\">
\t";
        // line 137
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 137) &&  !($context["is_front"] ?? null))) {
            echo "\t
\t\t<div class=\"page-with-sidebar section-spacing inner-page\">
\t\t\t<div class=\"container\">
\t\t        <div class=\"row\">
\t\t\t\t\t<div class='col-md-8 col-lg-9'>
\t";
        } elseif ( !        // line 142
($context["is_front"] ?? null)) {
            // line 143
            echo "\t\t<div class=\"page-without-sidebar section-spacing inner-page\">
\t\t\t<div class='container'>
\t";
        } else {
            // line 146
            echo "\t\t<div class=\"page-without-sidebar section-spacing\">
\t";
        }
        // line 148
        echo "\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        echo "
\t\t\t";
        // line 149
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
        echo "
\t\t\t";
        // line 150
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
        echo "
\t";
        // line 151
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 151) &&  !($context["is_front"] ?? null))) {
            echo "\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-lg-3 right-sidebar\">
\t\t\t\t\t\t";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        } elseif ( !        // line 159
($context["is_front"] ?? null)) {
            // line 160
            echo "\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 163
            echo "\t\t</div>
\t";
        }
        // line 165
        echo "</main>

";
        // line 167
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 167) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 167)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 167)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 167))) {
            // line 168
            echo " <footer class=\"site-footer wow fadeInUp\">
\t";
            // line 169
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 169) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 169)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 169))) {
                // line 170
                echo "\t<div class='footer-top'>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-lg-3\">
\t\t\t\t\t<div class='footer-contact'>
\t\t\t\t\t\t<div class=\"footer-logo\">
\t\t\t\t\t\t\t";
                // line 176
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icon-row\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-location-dot\"></i>
\t\t\t\t\t\t\t<p>";
                // line 180
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_address"] ?? null), 180, $this->source), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>      
\t\t\t\t\t\t<div class=\"icon-row\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-phone\"></i>
\t\t\t\t\t\t\t<a href=\"tel:+";
                // line 184
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 184, $this->source), "html", null, true);
                echo "\">+";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_phone"] ?? null), 184, $this->source), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icon-row\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-envelope-open\"></i>
\t\t\t\t\t\t\t<a href=\"mailto:";
                // line 188
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_email"] ?? null), 188, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_info_link_email"] ?? null), 188, $this->source), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-6\">
\t\t\t\t\t<div class ='footer-quick-link'>
\t\t\t\t\t\t";
                // line 194
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-3\">
\t\t\t\t\t<div class='footer-subscribe-us'>
\t\t\t\t\t\t";
                // line 199
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t<ul class=\"social-links list-inline d-flex align-items-center m-0\">
\t\t\t\t\t\t\t<li class='facebook'>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 202
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_facebook"] ?? null), 202, $this->source), "html", null, true);
                echo "\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class='twitter'>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 207
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_twitter"] ?? null), 207, $this->source), "html", null, true);
                echo "\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class='insta'>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 212
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_instagram"] ?? null), 212, $this->source), "html", null, true);
                echo "\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class='youtube'>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 217
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["january_social_link_youtube"] ?? null), 217, $this->source), "html", null, true);
                echo "\" target='_blank'>
\t\t\t\t\t\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            }
            // line 228
            echo "\t<div class=\"copyright-sec\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">\t\t
\t\t\t\t";
            // line 231
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 231)) {
                // line 232
                echo "\t\t\t\t\t<div class=\"col-md-6 text-center text-lg-start\">
\t\t\t\t\t\tAll Rights Reserved by @2023
\t\t\t\t\t</div>
\t\t\t\t\t <div class=\"col-md-6 text-center text-lg-end designerdby\">
\t\t\t\t\t \t<a href=\"https://www.dotsquares.com/lp/drupal\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" id=\"Layer_1\" x=\"0px\" y=\"0px\" width=\"16px\" height=\"16px\" viewBox=\"0 0 16 16\" enable-background=\"new 0 0 16 16\" xml:space=\"preserve\">  <image id=\"image0\" width=\"16\" height=\"16\" x=\"0\" y=\"0\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAABGdBTUEAALGPC/xhBQAAACBjSFJN AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAw1BMVEX0gSj0gyzzdhb6yaP9 6dnzehz0gir96Nj5tYHzdxf0fiP1kEL0hS/zeRr6yqX96dr0fCD0hC35toPzeRv0hjD0gCf2kkXy awL6xZv859bwbgnxdxnwbgr85tT4r3bybAPzcxD1hzL/9u7/yZn/zaD/ypr/9u3838n6xZz6yKH7 0K7y9/7J1+3M2u7y9/3/8+j859f97N4aLmklOnPJ1uv/tHXwbwv1ijgwRX0lOnTM2ez/uX7xeBr0 hS70fyX1kUT///9NSq1tAAAAAWJLR0RA/tlc2AAAAAd0SU1FB+cBDQURDSM87bEAAACNSURBVBjT hY9XFoIwFERfSBM1EKxArBA7WIgF+/535QLeh7/3nJm5AwDEo4wLwWXDJ80WIEBIWwWhjiItO91e fwCep4ZxkhozGk+majYHSoNYZrm1i+VqHWy2wFiYZLuiLIv94RjKE3Cu07yonKvOl6v2byBEZGzp 6vr+eL7eny8GKIJK0SwSQ+p/3/4AUrgXcZWWOC8AAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMDEt MTNUMDU6MTc6MTMrMDA6MDCPV1nyAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTAxLTEzVDA1OjE3 OjEzKzAwOjAw/grhTgAAACh0RVh0ZGF0ZTp0aW1lc3RhbXAAMjAyMy0wMS0xM1QwNToxNzoxMysw MDowMKkfwJEAAAAASUVORK5CYII=\"/></svg>
\t\t\t\t\t\t\tDotsquares
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 242
                echo "\t\t\t\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 242), 242, $this->source), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 244
            echo "\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<a href=\"#top\" id=\"top\"><span class=\"topbutton\"><i class=\"fa-solid fa-angle-up\"></i></span></a>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/january_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 244,  369 => 242,  357 => 232,  355 => 231,  350 => 228,  336 => 217,  328 => 212,  320 => 207,  312 => 202,  306 => 199,  298 => 194,  287 => 188,  278 => 184,  271 => 180,  264 => 176,  256 => 170,  254 => 169,  251 => 168,  249 => 167,  245 => 165,  241 => 163,  236 => 160,  234 => 159,  226 => 154,  220 => 151,  216 => 150,  212 => 149,  207 => 148,  203 => 146,  198 => 143,  196 => 142,  188 => 137,  183 => 134,  177 => 132,  175 => 131,  172 => 130,  166 => 127,  162 => 126,  159 => 125,  157 => 124,  154 => 123,  142 => 116,  136 => 115,  131 => 113,  126 => 111,  105 => 92,  91 => 80,  83 => 75,  75 => 70,  67 => 65,  56 => 59,  47 => 52,  45 => 51,  43 => 50,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/january_theme/templates/layout/page.html.twig", "/app/web/themes/contrib/january_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 50);
        static $filters = array("escape" => 59);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
