<?php

namespace Google\Web_Stories_Dependencies\Sabberworm\CSS\CSSList;

use Google\Web_Stories_Dependencies\Sabberworm\CSS\Property\AtRule;
/**
 * A BlockList constructed by an unknown @-rule. @media rules are rendered into AtRuleBlockList objects.
 */
class AtRuleBlockList extends CSSBlockList implements AtRule
{
    private $sType;
    private $sArgs;
    public function __construct($sType, $sArgs = '', $iLineNo = 0)
    {
        parent::__construct($iLineNo);
        $this->sType = $sType;
        $this->sArgs = $sArgs;
    }
    public function atRuleName()
    {
        return $this->sType;
    }
    public function atRuleArgs()
    {
        return $this->sArgs;
    }
    public function __toString()
    {
        return $this->render(new \Google\Web_Stories_Dependencies\Sabberworm\CSS\OutputFormat());
    }
    public function render(\Google\Web_Stories_Dependencies\Sabberworm\CSS\OutputFormat $oOutputFormat)
    {
        $sArgs = $this->sArgs;
        if ($sArgs) {
            $sArgs = ' ' . $sArgs;
        }
        $sResult = $oOutputFormat->sBeforeAtRuleBlock;
        $sResult .= "@{$this->sType}{$sArgs}{$oOutputFormat->spaceBeforeOpeningBrace()}{";
        $sResult .= parent::render($oOutputFormat);
        $sResult .= '}';
        $sResult .= $oOutputFormat->sAfterAtRuleBlock;
        return $sResult;
    }
    public function isRootList()
    {
        return \false;
    }
}
