<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
			'email' => 'info@sudo.team',
			'inn' => '7801646991',
			'address_ru' => 'г. Санкт-Петербург, ул. Нахимова, 20',
			'address_en' => 'St. Petersburg, Nakhimov str., 20',
			'feedback_email' => 'info@sudo.team',
			'resume_email' => 'info@sudo.team',
			'tools_email' => 'l.surovitskii@sudo.team',
		]);
    }
}
