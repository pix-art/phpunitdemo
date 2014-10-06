<?php
 
class NotificationTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('notifications')->truncate();
 
        Notification::create(array(
            'user_id' => 1,
            'notification' => "Docent A. Bastiaan zal afwezig zijn op 22/10/2014."
        ));
 
        
    }
 
}