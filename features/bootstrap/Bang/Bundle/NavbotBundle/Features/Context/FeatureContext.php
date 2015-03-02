<?php

namespace Bang\Bundle\NavbotBundle\Features\Context;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{
    use \Behat\Symfony2Extension\Context\KernelDictionary;

    /**
     * @var \Symfony\Component\DependencyInjection\Container
     */
    private $container;
    
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(\Symfony\Component\DependencyInjection\Container $container)
     {
        $this->container = $container;
         // $session is your Symfony2 @session
     }

    /**
     * @When I select the result identified by :id
     */
    public function iSelectTheResult($id)
    {
        $result = $this->getSession()->getPage()->findById($id);
        $elements = $result->findAll('css', 'h3 > a');
        
        $svcProfile = $this->container->get('profile.service');
        foreach ($elements as $link) {
            $profile = $svcProfile->getNewOrExistingProfileByName($link->getText());
            $svcProfile->saveProfile($profile);
        }
        
    }

    /**
     * @Then I wait for the page to load
     */
    public function iWaitForThePageToLoad()
    {
        throw new PendingException();
    }

    /**
     * @Given I am on the search form
     */
    public function iAmOnTheSearchForm()
    {
        throw new PendingException();
    }

    /**
     * @Given I am on the first results page
     */
    public function iAmOnTheFirstResultsPage()
    {
        throw new PendingException();
    }

    /**
     * @Given my number of visit for a profile is :arg1
     */
    public function myNumberOfVisitForAProfileIs($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given my waiting time in second before clicking is :arg1
     */
    public function myWaitingTimeInSecondBeforeClickingIs($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I browse all profiles in the page by clicking on :arg1 and store the name :arg2 in my personal database
     */
    public function iBrowseAllProfilesInThePageByClickingOnAndStoreTheNameInMyPersonalDatabase($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then I can go to the next page by clicking on :arg1 if I can
     */
    public function iCanGoToTheNextPageByClickingOnIfICan($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I repeat the browsing behaviour
     */
    public function iRepeatTheBrowsingBehaviour()
    {
        throw new PendingException();
    }

}
