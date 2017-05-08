Feature: Use the shopping cart
  In order to buy products from the shop
  As a client
  I need to be able to use the shopping cart

  @javascript
  Scenario: Add product to shopping cart
  Given I am on "/"
  And I want to add a product to shopping cart
  When I click ".btnAddAction"
    And I save a screenshot to "shot.png"
    And break
    And I wait 1
  Then I should see "//*[@id="new_item_added"]/p"