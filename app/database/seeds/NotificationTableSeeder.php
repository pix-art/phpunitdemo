<?php
 
class NotificationTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('notifications')->truncate();
 
        Notification::create(array(
            'level' => 1,
            'user_id' => 1,
            'notification' => "Docent A. Bastiaan zal afwezig zijn op 22/10/2014."
        ));

        Notification::create(array(
            'level' => 2,
            'user_id' => 1,
            'notification' => "Op 6/10 zal er een persconferentie van Telenet plaatsvinden in de Creativity Gym."
        ));

        Notification::create(array(
            'level' => 3,
            'user_id' => 2,
            'notification' => "IMD Café nodigt binnenkort opnieuw enkele sprekers uit om te spreken over SKETCH!"
        ));

        Notification::create(array(
            'level' => 3,
            'user_id' => 2,
            'notification' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. "
        ));

        Notification::create(array(
            'level' => 2,
            'user_id' => 2,
            'notification' => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s"
        ));

        Notification::create(array(
            'level' => 1,
            'user_id' => 2,
            'notification' => "when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ));

        Notification::create(array(
            'level' => 3,
            'user_id' => 2,
            'notification' => "It has survived not only five centuries, but also the leap into electronic typesetting"
        ));

        Notification::create(array(
            'level' => 3,
            'user_id' => 2,
            'notification' => "remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset"
        ));
        
    }
 
}