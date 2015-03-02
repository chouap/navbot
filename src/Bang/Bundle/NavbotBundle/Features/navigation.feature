@mink:selenium2
Feature: Bot on AdopteUnMec
    In order to make my account visited
    As an unpopular guy
    I need to consult a several time on the girl profiles to make them curious

    Scenario: Login
        Given I am on "https://google.fr"
            And I should see "Login"
        When I fill in "email" with "myemail@test.com"
            And I fill in "password" with "mysecurepassword"
            And I press "Login"
        Then I wait for the page to load

    Scenario: Search
        Given I am on the search form
        When I fill in "email" with "qsdqd"
            And I fill in "kkchose" with "qsdqd"
            And I fill in "kkchose" with "qdqsdq"
            And I fill in "kkchose" with "dqdqd"
            And I fill in "kkchose" with "dqdd"
            And I fill in "kkchose" with "qdqsd"
            And I press "Search"
        Then I wait for the page to load
			
	Scenario: Navigation
        Given I am on the first results page
            And my number of visit for a profile is "3"
            And my waiting time in second before clicking is "5"
        When I browse all profiles in the page by clicking on "show_button" and store the name "dqsdq" in my personal database
        Then I can go to the next page by clicking on "link" if I can
                And I wait for the page to load
                And I repeat the browsing behaviour
