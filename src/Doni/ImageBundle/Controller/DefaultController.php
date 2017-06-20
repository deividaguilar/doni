<?php

namespace Doni\ImageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('DoniImageBundle:Default:index.html.twig', array('imgEncode' => $this->readImage()));
    }

    public function readImage() {
        $ds = DIRECTORY_SEPARATOR;
        $pathImg = str_replace("Controller", "Resources{$ds}images{$ds}tumblr_lfp3qax6Lm1qfmtrbo1_1280.jpg", __DIR__);
        $pathImg2 = str_replace("Controller", "Resources{$ds}images{$ds}mask.png", __DIR__);
        return $this->getImgEncode($pathImg, \Imagick::COLORSPACE_RGB, 5, 5, $pathImg2);
    }

    function getImgEncode($imagePath, $colorSpace, $clusterThreshold, $smoothThreshold) {
        $imagick = new \Imagick(realpath($imagePath));
        $imagick->segmentImage($colorSpace, $clusterThreshold, $smoothThreshold);
        return base64_encode($imagick->getImageBlob());
    }

}
