<?php
namespace NeosRulez\ReactJs\Fusion;

use Neos\Flow\Annotations as Flow;
use Neos\Fusion\FusionObjects\AbstractFusionObject;

class InlineFusion extends AbstractFusionObject {

    /**
     * @return array
     */
    public function evaluate() {
        $src = $this->fusionValue('src');
        $result = [];
        if($src) {
            $inlineJs = file_get_contents($src);
            $result[] = explode("\n", $inlineJs);
        }
        return $result;
    }

}