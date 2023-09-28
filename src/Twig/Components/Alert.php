<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

/**
 *
 * {# Content #}
 * {% set _title = options.title ?? null %}
 * {% set _description = options.description ?? null %}
 * {% set _icon = options.icon ?? null %}
 *
 * {# Configuration #}
 * {% set _type = options.type ?? 'danger' %}
 * {% set _dismissible = (options.dismissible ?? false) is same as (true) %}
 * {% set _important = (options.important ?? false) is same as (true) %}
 *
 * {% set _id = options.id ?? null %}
 * {% set _attr = options.attr ?? {} %}
 * {% set _class = options.class ?? '' %}
 * {% set _raw = (options.raw ?? false) is same as (true) %}
 *
 * {% if (_title is empty or _description is empty) and options.important is not defined %}
 * {% deprecated "Using important alert without setting the 'important' option is deprecated, set option to true instead." %}
 * {% set _important = true %}
 * {% endif %}
 */
//#[AsTwigComponent(name: 'tabler:alert', template: "components/Alert.html.twig")]
#[AsTwigComponent()]
final class Alert
{
    public ?string $id=null;
    public ?string $title=null;
    public ?string $description=null;
    public ?string $icon=null;
    public ?string $type='danger';
    public ?string $class='';
    public bool $dismissible=false;
    public bool $important=false;
    public bool $raw=false;
    public array $attr=[];

}
