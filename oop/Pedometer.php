<?php

class Pedometer {

    // MEMBER VARIABLES / PROPERTIES / INSTANCE VARIABLES
    private DateTime $date;
    private int $steps;


    // CONSTRUCTOR
    public function __construct($date = null, $steps = 0)
    {
        // If no date is passed, set the current date
        if ($date === null) {
            $this->date = new DateTime();
        } else {
            // Set the passed date
            $this->date = new DateTime($date);
        }

        // Set the number of steps passed
        $this->steps = $steps;
    }

    // METHODS

    /**
     * Increments the number of steps by one.
     *
     * @return void
     */
    public function incrementSteps(): void
    {
        $this->steps ++;
    }

    /**
     * Formats the date as a string and outputs the day and steps.
     *
     * @return void
     */
    public function toString(): void
    {
        // Formats the DateTime object as a string
//        $formattedDate = $this->date->format('Y-m-d H:i:s');
        $formattedDate = $this->date->format('Y-m-d');

        // Displays the number of steps and the date
        echo "Am $formattedDate bin ich $this->steps Schritte gegangen.";
    }

}

// TEST
$p = new Pedometer('11.11.2011', 1110);
$p->toString();
echo "\n";
$p->incrementSteps();
$p->toString();