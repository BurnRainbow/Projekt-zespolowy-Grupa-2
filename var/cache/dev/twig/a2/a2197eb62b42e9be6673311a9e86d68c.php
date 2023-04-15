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

/* main/index.html.twig */
class __TwigTemplate_984cacc611f5af6c2abdc60ca4fc5c9c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        echo "Strona glowna";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        echo "  
<link href=\"https://fonts.googleapis.com/css2?family=Oswald&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css2?family=Lato&display=swap\" rel=\"stylesheet\"> 
<script src=\"https://kit.fontawesome.com/44cff32433.js\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<style>
:root {
\t--white:#f1f1f1
}
body {
\tmargin: 0;
\tfont-family: Montserrat;
\tfont-size: 40px;
\tcolor: var(--white);
\tletter-spacing: 0.7em;
\tbackground-color: black;
\tdisplay: flex;
\tjustify-content: center;
\talign-items: center;
\theight: 100vh;
}
div > span {
\topacity: 0.15;
}
#S, #P, #E {
\topacity: 1;
\tanimation: flickerI 5s linear  reverse infinite;
}
#S::after, #P::after, #E::after {
\tcontent: '';
\twidth: 150%;
\t-webkit-box-shadow: -35px 0px 60px 8px rgba(255,255,255,1);
\t-moz-box-shadow: -35px 0px 60px 8px rgba(255,255,255,1);
\tbox-shadow: -35px 0px 60px 8px rgba(255,255,255,1);
}
#U::after, 
#U::before,
#T2::after,
#T2::before   {
\tcontent:' ';
\twidth: 100px;
\theight: 100px;
\tbackground: var(--white);
\tposition: absolute;
\ttop: -50%;
\tleft: 100%;
\tborder-radius: 100%;
\topacity: 0.05;
\tfilter: blur(15px);
}
#U::after {
\twidth: 200px;
\theight: 200px;
\ttop: -150%;
\tleft: -5%;
\topacity: 0.1;
\tfilter: blur(10px);
}
#T1, #D, #N, #Z {
\tanimation: flickerH 2s linear reverse infinite
}

@keyframes flickerI {
\t0% {
\t\topacity: 0.4;
\t}
\t5% {
\t\topacity: 0.5;
\t}
\t10% {
\t\topacity: 0.6;
\t}
\t15% {
\t\topacity: 0.85;
\t}
\t25% {
\t\topacity: 0.5;
\t}
\t30% {
\t\topacity: 1;
\t}
\t35% {
\t\topacity: 0.1;
\t}
\t40% {
\t\topacity: 0.25;
\t}
\t45% {
\t\topacity: 0.5;
\t}
\t60% {
\t\topacity: 1;
\t}
\t70% {
\t\topacity: 0.85;
\t}
\t80% {
\t\topacity: 0.4;
\t}
\t90% {
\t\topacity: 0.5;
\t}
\t100% {
\t\topacity: 1;
\t}
}

@keyframes flickerH {
\t0% {
\t\topacity: 0.15;
\t}
\t5% {
\t\topacity: 0.2;
\t}
\t10% {
\t\topacity: 0.12;
\t}
\t15% {
\t\topacity: 0.2;
\t}
\t25% {
\t\topacity: 0.15;
\t}
\t30% {
\t\topacity: 0.4;
\t}
\t35% {
\t\topacity: 0.05;
\t}
\t40% {
\t\topacity: 0.12;
\t}
\t45% {
\t\topacity: 0.15;
\t}
\t60% {
\t\topacity: 0.3;
\t}
\t70% {
\t\topacity: 0.2;
\t}
\t80% {
\t\topacity: 0.3;
\t}
\t90% {
\t\topacity: 0.18;
\t}
\t100% {
\t\topacity: 0.3;
\t}
}
.wrapper{
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  /*background: linear-gradient(-135deg, #c850c0, #4158d0);*/
  /* background: linear-gradient(375deg, #1cc7d0, #2ede98); */
 /* background: linear-gradient(-45deg, #e3eefe 0%, #efddfb 100%);*/
  /* clip-path: circle(25px at calc(0% + 45px) 45px); */
  background: #0a0a0a;
  clip-path: circle(25px at calc(100% - 45px) 45px);
  transition: all 0.5s ease-in-out;
}
#active:checked ~ .wrapper{
  clip-path: circle(75%);
}
.menu-btn{
  position: absolute;
  z-index: 2;
  right: 20px;
  /* left: 20px; */
  top: 20px;
  height: 50px;
  width: 50px;
  text-align: center;
  line-height: 50px;
  border-radius: 50%;
  font-size: 20px;
  color: #fff;
  cursor: pointer;
  /*background: linear-gradient(-135deg, #c850c0, #4158d0);*/
  /* background: linear-gradient(375deg, #1cc7d0, #2ede98); */
 /* background: linear-gradient(-45deg, #e3eefe 0%, #efddfb 100%); */
  background: #000;
  transition: all 0.5s ease-in-out;
}
#active:checked ~ .menu-btn{
  color: #fff;
  background: #0a0a0a;
}
#active:checked ~ .menu-btn i:before{
  content: \"\\f00d\";
}
.wrapper ul{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  list-style: none;
  text-align: center;
}
.wrapper ul li{
  margin: 15px 0;
}
.wrapper ul li a{
  color: none;
  text-decoration: none;
  font-size: 30px;
  font-weight: 500;
  padding: 5px 30px;
  color: #fff;
  border-radius: 50px;
  background: #0a0a0a;
  position: relative;
  line-height: 50px;
  transition: all 0.3s ease;
}
.wrapper ul li a:after{
  position: absolute;
  content: \"\";
  background: #fff;
   background: linear-gradient(#14ffe9, #ffeb3b, #ff00e0);
  /*background: linear-gradient(375deg, #1cc7d0, #2ede98);*/
  width: 104%;
  height: 110%;
  left: -2%;
  top: -5%; /* if the font is 'Oswald'*/
  border-radius: 50px;
  transform: scaleY(0);
  z-index: -1;
  animation: rotate 1.5s linear infinite;
  transition: transform 0.3s ease;
}
.wrapper ul li a:hover:after{
  transform: scaleY(1);
}
.wrapper ul li a:hover{
  color: #fff;
}
input[type=\"checkbox\"]{
  display: none;
}
@keyframes rotate {
  0%{
    filter: hue-rotate(0deg);
  }
  100%{
    filter: hue-rotate(360deg);
  }
}
</style>
<div>
\t<span id=\"S\">S</span>
\t<span id=\"T1\">T</span>
\t<span id=\"U\">U</span>
\t<span id=\"D\">D</span>
\t<span id=\"E\">E</span>
\t<span id=\"N\">N</span>
\t<span id=\"T2\">T</span>
\t<span id=\"Z\">0</span>
\t<span id=\"P\">5</span>
</div>
    <input type=\"checkbox\" id=\"active\">
    <label for=\"active\" class=\"menu-btn\"><i class=\"fas fa-align-justify\"></i></label>
    <div class=\"wrapper\">
      <ul>
<li><a href=\"/mnozenie\">Mnożenie</a></li>
<li><a href=\"/balwan\">Bałwan</a></li>
<li><a href=\"/balwan2\">Bałwan2</a></li>
<li><a href=\"/zadanie_6/index.html\">Zadanie 6</a></li>
<li><a href=\"wip\">W.I.P.</a></li>
</ul>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 10,  102 => 9,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Strona glowna{% endblock %}
{% block head %}  
<link href=\"https://fonts.googleapis.com/css2?family=Oswald&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css2?family=Lato&display=swap\" rel=\"stylesheet\"> 
<script src=\"https://kit.fontawesome.com/44cff32433.js\" crossorigin=\"anonymous\"></script>
{% endblock %}
{% block body %}
<style>
:root {
\t--white:#f1f1f1
}
body {
\tmargin: 0;
\tfont-family: Montserrat;
\tfont-size: 40px;
\tcolor: var(--white);
\tletter-spacing: 0.7em;
\tbackground-color: black;
\tdisplay: flex;
\tjustify-content: center;
\talign-items: center;
\theight: 100vh;
}
div > span {
\topacity: 0.15;
}
#S, #P, #E {
\topacity: 1;
\tanimation: flickerI 5s linear  reverse infinite;
}
#S::after, #P::after, #E::after {
\tcontent: '';
\twidth: 150%;
\t-webkit-box-shadow: -35px 0px 60px 8px rgba(255,255,255,1);
\t-moz-box-shadow: -35px 0px 60px 8px rgba(255,255,255,1);
\tbox-shadow: -35px 0px 60px 8px rgba(255,255,255,1);
}
#U::after, 
#U::before,
#T2::after,
#T2::before   {
\tcontent:' ';
\twidth: 100px;
\theight: 100px;
\tbackground: var(--white);
\tposition: absolute;
\ttop: -50%;
\tleft: 100%;
\tborder-radius: 100%;
\topacity: 0.05;
\tfilter: blur(15px);
}
#U::after {
\twidth: 200px;
\theight: 200px;
\ttop: -150%;
\tleft: -5%;
\topacity: 0.1;
\tfilter: blur(10px);
}
#T1, #D, #N, #Z {
\tanimation: flickerH 2s linear reverse infinite
}

@keyframes flickerI {
\t0% {
\t\topacity: 0.4;
\t}
\t5% {
\t\topacity: 0.5;
\t}
\t10% {
\t\topacity: 0.6;
\t}
\t15% {
\t\topacity: 0.85;
\t}
\t25% {
\t\topacity: 0.5;
\t}
\t30% {
\t\topacity: 1;
\t}
\t35% {
\t\topacity: 0.1;
\t}
\t40% {
\t\topacity: 0.25;
\t}
\t45% {
\t\topacity: 0.5;
\t}
\t60% {
\t\topacity: 1;
\t}
\t70% {
\t\topacity: 0.85;
\t}
\t80% {
\t\topacity: 0.4;
\t}
\t90% {
\t\topacity: 0.5;
\t}
\t100% {
\t\topacity: 1;
\t}
}

@keyframes flickerH {
\t0% {
\t\topacity: 0.15;
\t}
\t5% {
\t\topacity: 0.2;
\t}
\t10% {
\t\topacity: 0.12;
\t}
\t15% {
\t\topacity: 0.2;
\t}
\t25% {
\t\topacity: 0.15;
\t}
\t30% {
\t\topacity: 0.4;
\t}
\t35% {
\t\topacity: 0.05;
\t}
\t40% {
\t\topacity: 0.12;
\t}
\t45% {
\t\topacity: 0.15;
\t}
\t60% {
\t\topacity: 0.3;
\t}
\t70% {
\t\topacity: 0.2;
\t}
\t80% {
\t\topacity: 0.3;
\t}
\t90% {
\t\topacity: 0.18;
\t}
\t100% {
\t\topacity: 0.3;
\t}
}
.wrapper{
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  /*background: linear-gradient(-135deg, #c850c0, #4158d0);*/
  /* background: linear-gradient(375deg, #1cc7d0, #2ede98); */
 /* background: linear-gradient(-45deg, #e3eefe 0%, #efddfb 100%);*/
  /* clip-path: circle(25px at calc(0% + 45px) 45px); */
  background: #0a0a0a;
  clip-path: circle(25px at calc(100% - 45px) 45px);
  transition: all 0.5s ease-in-out;
}
#active:checked ~ .wrapper{
  clip-path: circle(75%);
}
.menu-btn{
  position: absolute;
  z-index: 2;
  right: 20px;
  /* left: 20px; */
  top: 20px;
  height: 50px;
  width: 50px;
  text-align: center;
  line-height: 50px;
  border-radius: 50%;
  font-size: 20px;
  color: #fff;
  cursor: pointer;
  /*background: linear-gradient(-135deg, #c850c0, #4158d0);*/
  /* background: linear-gradient(375deg, #1cc7d0, #2ede98); */
 /* background: linear-gradient(-45deg, #e3eefe 0%, #efddfb 100%); */
  background: #000;
  transition: all 0.5s ease-in-out;
}
#active:checked ~ .menu-btn{
  color: #fff;
  background: #0a0a0a;
}
#active:checked ~ .menu-btn i:before{
  content: \"\\f00d\";
}
.wrapper ul{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  list-style: none;
  text-align: center;
}
.wrapper ul li{
  margin: 15px 0;
}
.wrapper ul li a{
  color: none;
  text-decoration: none;
  font-size: 30px;
  font-weight: 500;
  padding: 5px 30px;
  color: #fff;
  border-radius: 50px;
  background: #0a0a0a;
  position: relative;
  line-height: 50px;
  transition: all 0.3s ease;
}
.wrapper ul li a:after{
  position: absolute;
  content: \"\";
  background: #fff;
   background: linear-gradient(#14ffe9, #ffeb3b, #ff00e0);
  /*background: linear-gradient(375deg, #1cc7d0, #2ede98);*/
  width: 104%;
  height: 110%;
  left: -2%;
  top: -5%; /* if the font is 'Oswald'*/
  border-radius: 50px;
  transform: scaleY(0);
  z-index: -1;
  animation: rotate 1.5s linear infinite;
  transition: transform 0.3s ease;
}
.wrapper ul li a:hover:after{
  transform: scaleY(1);
}
.wrapper ul li a:hover{
  color: #fff;
}
input[type=\"checkbox\"]{
  display: none;
}
@keyframes rotate {
  0%{
    filter: hue-rotate(0deg);
  }
  100%{
    filter: hue-rotate(360deg);
  }
}
</style>
<div>
\t<span id=\"S\">S</span>
\t<span id=\"T1\">T</span>
\t<span id=\"U\">U</span>
\t<span id=\"D\">D</span>
\t<span id=\"E\">E</span>
\t<span id=\"N\">N</span>
\t<span id=\"T2\">T</span>
\t<span id=\"Z\">0</span>
\t<span id=\"P\">5</span>
</div>
    <input type=\"checkbox\" id=\"active\">
    <label for=\"active\" class=\"menu-btn\"><i class=\"fas fa-align-justify\"></i></label>
    <div class=\"wrapper\">
      <ul>
<li><a href=\"/mnozenie\">Mnożenie</a></li>
<li><a href=\"/balwan\">Bałwan</a></li>
<li><a href=\"/balwan2\">Bałwan2</a></li>
<li><a href=\"/zadanie_6/index.html\">Zadanie 6</a></li>
<li><a href=\"wip\">W.I.P.</a></li>
</ul>
</div>
{% endblock %}", "main/index.html.twig", "E:\\symfony\\templates\\main\\index.html.twig");
    }
}
