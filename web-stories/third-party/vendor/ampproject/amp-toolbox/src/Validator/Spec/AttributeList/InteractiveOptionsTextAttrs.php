<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */
namespace Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\AttributeList;

use Google\Web_Stories_Dependencies\AmpProject\Attribute;
use Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\AttributeList;
use Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\Identifiable;
use Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\SpecRule;
/**
 * Attribute list class InteractiveOptionsTextAttrs.
 *
 * @package ampproject/amp-toolbox.
 *
 * @property-read array<bool> $option1Text
 * @property-read array<bool> $option2Text
 * @property-read array $option3Text
 * @property-read array<array<array<string>>> $option4Text
 */
final class InteractiveOptionsTextAttrs extends AttributeList implements Identifiable
{
    /**
     * ID of the attribute list.
     *
     * @var string
     */
    const ID = 'interactive-options-text-attrs';
    /**
     * Array of attributes.
     *
     * @var array<array>
     */
    const ATTRIBUTES = [Attribute::OPTION_1_TEXT => [SpecRule::MANDATORY => \true], Attribute::OPTION_2_TEXT => [SpecRule::MANDATORY => \true], Attribute::OPTION_3_TEXT => [], Attribute::OPTION_4_TEXT => [SpecRule::TRIGGER => [SpecRule::ALSO_REQUIRES_ATTR => [Attribute::OPTION_3_TEXT]]]];
}
