Feature: edit
	This is a standard behat test to see if the edit function works

Scenario: When i visit the edit page and i edit something i should see a confirm message
    Given I am on "/notifications/7/edit"
    When I fill in "Test notification" for "Notification"
    Then I press "Edit notification!"
    Then I should see "Successfully updated Notification!"