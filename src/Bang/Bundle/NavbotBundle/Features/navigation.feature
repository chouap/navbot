@mink:selenium2
Feature: Simple google search
    Scenario: Login
        Given I am on "https://google.fr"
        When I fill in "q" with "les vacances de toto"
            And I press "gbqfb"
            And I select the result identified by "search"
        Perform I go to ther swimming pool