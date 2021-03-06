<?php

namespace Developtech\AgilityBundle\Tests\Model;

use Developtech\AgilityBundle\Entity\Feature;
use Developtech\AgilityBundle\Entity\Project;
use Developtech\AgilityBundle\Tests\Mock\User;

class FeatureTest extends \PHPUnit_Framework_TestCase {
    public function testModel() {
        $feature =
            (new Feature())
            ->setId(1)
            ->setFeatureType(Feature::FEATURE_TYPE_USER)
            ->setName('Calendar')
            ->setSlug('calendar')
            ->setDescription('Calendar of all the events')
            ->setResponsible((new User()))
            ->setProject((new Project()))
            ->setProductOwnerValue(80)
            ->setUserValue(67)
            ->setStatus(Feature::STATUS_IN_PROGRESS)
            ->setCreatedAt(new \DateTime())
            ->setUpdatedAt(new \DateTime())
        ;
        $this->assertEquals(1, $feature->getId());
        $this->assertEquals(Feature::FEATURE_TYPE_USER, $feature->getFeatureType());
        $this->assertEquals(Feature::TYPE_FEATURE, $feature->getType());
        $this->assertEquals('Calendar', $feature->getName());
        $this->assertEquals('calendar', $feature->getSlug());
        $this->assertEquals('Calendar of all the events', $feature->getDescription());
        $this->assertInstanceOf(User::class, $feature->getResponsible());
        $this->assertInstanceOf(Project::class, $feature->getProject());
        $this->assertEquals(Feature::STATUS_IN_PROGRESS, $feature->getStatus());
        $this->assertEquals(80, $feature->getProductOwnerValue());
        $this->assertEquals(67, $feature->getUserValue());
        $this->assertInstanceOf('DateTime', $feature->getCreatedAt());
        $this->assertInstanceOf('DateTime', $feature->getUpdatedAt());
    }
}
