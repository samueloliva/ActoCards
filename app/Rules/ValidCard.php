<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidCard implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $validCards = ["A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Q", "J", "K"];
        $cards = explode(" ", $value);
        foreach($cards as $card) 
            if(!in_array($card, $validCards))
                return false;
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Some card of the pack is not valid';
    }
}
