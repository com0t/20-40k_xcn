<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */
namespace Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\Tag;

use Google\Web_Stories_Dependencies\AmpProject\Attribute;
use Google\Web_Stories_Dependencies\AmpProject\Format;
use Google\Web_Stories_Dependencies\AmpProject\Tag as Element;
use Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\Identifiable;
use Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\SpecRule;
use Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\Tag;
/**
 * Tag class ScriptAmpOnerrorV0Js.
 *
 * @package ampproject/amp-toolbox.
 *
 * @property-read string $tagName
 * @property-read string $specName
 * @property-read bool $unique
 * @property-read string $mandatoryParent
 * @property-read array<array> $attrs
 * @property-read array<string> $cdata
 * @property-read array<string> $htmlFormat
 * @property-read string $descriptiveName
 */
final class ScriptAmpOnerrorV0Js extends Tag implements Identifiable
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'script amp-onerror (v0.js)';
    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [SpecRule::TAG_NAME => Element::SCRIPT, SpecRule::SPEC_NAME => 'script amp-onerror (v0.js)', SpecRule::UNIQUE => \true, SpecRule::MANDATORY_PARENT => Element::HEAD, SpecRule::ATTRS => [Attribute::AMP_ONERROR => [SpecRule::MANDATORY => \true, SpecRule::VALUE => [''], SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH']], SpecRule::CDATA => [SpecRule::MANDATORY_CDATA => 'document.querySelector("script[src*=\'/v0.js\']").onerror=function(){document.querySelector(\'style[amp-boilerplate]\').textContent=\'\'}'], SpecRule::HTML_FORMAT => [Format::AMP], SpecRule::DESCRIPTIVE_NAME => 'script amp-onerror'];
}
