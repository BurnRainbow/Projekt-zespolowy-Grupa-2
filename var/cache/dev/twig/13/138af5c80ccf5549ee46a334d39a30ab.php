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

/* balwan2/index.html.twig */
class __TwigTemplate_24577198a87c43068a56c400235985f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'article' => [$this, 'block_article'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balwan2/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "balwan2/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "balwan2/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "🙉Balwan2";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_article($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "article"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "article"));

        // line 6
        echo "    <style>
    #gora{
        width: 100%;
        height: 50%;
        background-color: blue;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    #dol{
        width: 100%;
        height: 50%;
        background-color: rgb(15,235,12);
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    #czapka_gora{
        width: 10%;
        height: 15%;
        background-color: blue;
        border-bottom: solid 5px red;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #czapka_dol{
        width: 50%;
        height: 90%;
        background-color: rgb(15, 246, 15);
        border: solid 5px red;
    }
    #glowa{
        width: 7%;
        height: 30%;
        border-radius: 50%;
        background-color: white;
        border: solid 4px black;
    }
    #tulow{
        width: 15%;
        height: 50%;
        border-radius: 50%;
        border: solid 4px black;
        display: inline-block;
        background-color: white;
    }
    #nogi{
        width: 25%;
        height: 100%;
        border-radius: 50%;
        border: solid 4px black;
        display: inline-block;
        background-color: white;
    }
    @media screen and (max-width: 900px) {
    #gora{
        width: 100%;
        height: 50%;
        background-color: blue;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    #dol{
        width: 100%;
        height: 50%;
        background-color: rgb(15,235,12);
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    #czapka_gora{
        width: 10%;
        height: 15%;
        background-color: blue;
        border-bottom: solid 5px red;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #czapka_dol{
        width: 50%;
        height: 90%;
        background-color: rgb(15, 246, 15);
        border: solid 5px red;
    }
    #glowa{
        width: 7%;
        height: 30%;
        border-radius: 50%;
        background-color: red;
        border: solid 4px black;
    }
    #tulow{
        width: 15%;
        height: 50%;
        border-radius: 50%;
        border: solid 4px black;
        display: inline-block;
        background-color: red;
    }
    #nogi{
        width: 25%;
        height: 100%;
        border-radius: 50%;
        border: solid 4px black;
        display: inline-block;
        background-color: red;
    }
    }
    @media screen and (max-width: 750px) {
    #gora{
        width: 100%;
        height: 50%;
        background-color: black;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    #dol{
        width: 100%;
        height: 50%;
        background-color: black;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    #czapka_gora{
        width: 10%;
        height: 15%;
        background-color: black;
        border-bottom: solid 5px red;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #czapka_dol{
        width: 50%;
        height: 90%;
        background-color: rgb(15, 246, 15);
        border: solid 5px red;
    }
    #glowa{
        width: 7%;
        height: 30%;
        border-radius: 50%;
        background-color: red;
        border: solid 4px black;
    }
    #tulow{
        width: 15%;
        height: 50%;
        border-radius: 50%;
        border: solid 4px black;
        display: inline-block;
        background-color: red;
    }
    #nogi{
        width: 25%;
        height: 100%;
        border-radius: 50%;
        border: solid 4px black;
        display: inline-block;
        background-color: red;
    }
    }

    </style>
            <div id=\"gora\">
                    <div id=\"czapka_gora\">
                        <div id=\"czapka_dol\"></div>
                    </div>
                    <div id=\"glowa\"></div>
                    <div id=\"tulow\"></div>
            </div>
            <div id=\"dol\">
                <div id=\"nogi\"></div>
            </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "balwan2/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}🙉Balwan2{% endblock %}

    {% block article %}
    <style>
    #gora{
        width: 100%;
        height: 50%;
        background-color: blue;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    #dol{
        width: 100%;
        height: 50%;
        background-color: rgb(15,235,12);
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    #czapka_gora{
        width: 10%;
        height: 15%;
        background-color: blue;
        border-bottom: solid 5px red;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #czapka_dol{
        width: 50%;
        height: 90%;
        background-color: rgb(15, 246, 15);
        border: solid 5px red;
    }
    #glowa{
        width: 7%;
        height: 30%;
        border-radius: 50%;
        background-color: white;
        border: solid 4px black;
    }
    #tulow{
        width: 15%;
        height: 50%;
        border-radius: 50%;
        border: solid 4px black;
        display: inline-block;
        background-color: white;
    }
    #nogi{
        width: 25%;
        height: 100%;
        border-radius: 50%;
        border: solid 4px black;
        display: inline-block;
        background-color: white;
    }
    @media screen and (max-width: 900px) {
    #gora{
        width: 100%;
        height: 50%;
        background-color: blue;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    #dol{
        width: 100%;
        height: 50%;
        background-color: rgb(15,235,12);
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    #czapka_gora{
        width: 10%;
        height: 15%;
        background-color: blue;
        border-bottom: solid 5px red;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #czapka_dol{
        width: 50%;
        height: 90%;
        background-color: rgb(15, 246, 15);
        border: solid 5px red;
    }
    #glowa{
        width: 7%;
        height: 30%;
        border-radius: 50%;
        background-color: red;
        border: solid 4px black;
    }
    #tulow{
        width: 15%;
        height: 50%;
        border-radius: 50%;
        border: solid 4px black;
        display: inline-block;
        background-color: red;
    }
    #nogi{
        width: 25%;
        height: 100%;
        border-radius: 50%;
        border: solid 4px black;
        display: inline-block;
        background-color: red;
    }
    }
    @media screen and (max-width: 750px) {
    #gora{
        width: 100%;
        height: 50%;
        background-color: black;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    #dol{
        width: 100%;
        height: 50%;
        background-color: black;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    #czapka_gora{
        width: 10%;
        height: 15%;
        background-color: black;
        border-bottom: solid 5px red;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #czapka_dol{
        width: 50%;
        height: 90%;
        background-color: rgb(15, 246, 15);
        border: solid 5px red;
    }
    #glowa{
        width: 7%;
        height: 30%;
        border-radius: 50%;
        background-color: red;
        border: solid 4px black;
    }
    #tulow{
        width: 15%;
        height: 50%;
        border-radius: 50%;
        border: solid 4px black;
        display: inline-block;
        background-color: red;
    }
    #nogi{
        width: 25%;
        height: 100%;
        border-radius: 50%;
        border: solid 4px black;
        display: inline-block;
        background-color: red;
    }
    }

    </style>
            <div id=\"gora\">
                    <div id=\"czapka_gora\">
                        <div id=\"czapka_dol\"></div>
                    </div>
                    <div id=\"glowa\"></div>
                    <div id=\"tulow\"></div>
            </div>
            <div id=\"dol\">
                <div id=\"nogi\"></div>
            </div>
    {% endblock %}", "balwan2/index.html.twig", "E:\\symfony\\templates\\balwan2\\index.html.twig");
    }
}
