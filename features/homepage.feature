Feature: homepage
	This is a standard behat test to see if the homepage shows the right notifications

Scenario: When i visit the homepage i should see notifications
    Given I am on "/notifications"
    Then I should see "Docent A. Bastiaan zal afwezig zijn op 22/10/2014."
    Then I should see "Op 6/10 zal er een persconferentie van Telenet plaatsvinden in de Creativity Gym."