<?php
class UserGenerator {

    // Properties
    private $faker;
    private $users;

    // Constructor
    function __construct($numberOfUsers) {
        $this->users = array();
        $this->faker = Faker\Factory::create();
        $this->setUsers($numberOfUsers, $this->faker);
}

    // Getters / Setters
    public function setUsers($numberOfUsers, $faker) {
        for ($i = 0; $i < $numberOfUsers; $i++) {

    // create String to hold user html
    $user = '';
    $user .= '<span class="bold">' . $faker->title . ' ' . $faker->firstName . ' ' . $faker->lastName . '</span><br />';
    $user .= '<a href="mailto:' . $faker->email . '">' . $faker->email . '</a><br />';
    $user .= $faker->phoneNumber . '<br />';
    $user .= $faker->streetAddress . '<br />';
    $user .= $faker->city . ', ' . $faker->state . ' ' . $faker->postcode . '<br />';
    $user .= 'Co.: ' . $faker->company . '<br /><br />';
    
    // add single user to users array
    $this->users[] = $user;
    }
}
public function getUsers() {
    return $this->users;
    }
}