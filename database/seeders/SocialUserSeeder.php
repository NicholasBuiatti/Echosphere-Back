<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\SocialUser;

class SocialUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dati degli utenti di esempio
        $users = [
            [
                'name' => 'Mario',
                'surname' => 'Rossi',
                'nickname' => 'mrossi',
                'birth_date' => '1990-05-15',
                'email' => 'mario.rossi@example.com',
                'number_phone' => '+393456789012',
                'password' => Hash::make('password123'),
                'avatar_url' => 'https://via.placeholder.com/150',
                'bio' => 'Ciao, sono Mario e adoro i social network!',
                'gender' => 'male',
                'status' => 'active',
            ],
            [
                'name' => 'Luisa',
                'surname' => 'Bianchi',
                'nickname' => 'lbianchi',
                'birth_date' => '1995-09-20',
                'email' => 'luisa.bianchi@example.com',
                'number_phone' => '+393478901234',
                'password' => Hash::make('password123'),
                'avatar_url' => 'https://via.placeholder.com/150',
                'bio' => 'Appassionata di fotografia e viaggi.',
                'gender' => 'female',
                'status' => 'active',
            ],
            [
                'name' => 'Giovanni',
                'surname' => 'Verdi',
                'nickname' => 'gverdi',
                'birth_date' => '1988-02-10',
                'email' => 'giovanni.verdi@example.com',
                'number_phone' => '+393451234567',
                'password' => Hash::make('password123'),
                'avatar_url' => 'https://via.placeholder.com/150',
                'bio' => 'Esperto di tecnologia e programmazione.',
                'gender' => 'male',
                'status' => 'active',
            ],
            [
                'name' => 'Elisa',
                'surname' => 'Neri',
                'nickname' => 'eneri',
                'birth_date' => '2000-11-25',
                'email' => 'elisa.neri@example.com',
                'number_phone' => '+393452345678',
                'password' => Hash::make('password123'),
                'avatar_url' => 'https://via.placeholder.com/150',
                'bio' => 'Amante dei libri e delle serie TV.',
                'gender' => 'female',
                'status' => 'active',
            ],
            [
                'name' => 'Alessandro',
                'surname' => 'Gialli',
                'nickname' => 'agialli',
                'birth_date' => '1992-03-10',
                'email' => 'alessandro.gialli@example.com',
                'number_phone' => '+393459876543',
                'password' => Hash::make('password123'),
                'avatar_url' => 'https://via.placeholder.com/150',
                'bio' => 'Appassionato di sport e cucina.',
                'gender' => 'male',
                'status' => 'active',
            ],
            [
                'name' => 'Sofia',
                'surname' => 'Blu',
                'nickname' => 'sblu',
                'birth_date' => '1998-07-15',
                'email' => 'sofia.blu@example.com',
                'number_phone' => '+393456789111',
                'password' => Hash::make('password123'),
                'avatar_url' => 'https://via.placeholder.com/150',
                'bio' => 'Adoro viaggiare e incontrare nuove persone.',
                'gender' => 'female',
                'status' => 'active',
            ],
            [
                'name' => 'Marco',
                'surname' => 'Argenti',
                'nickname' => 'margenti',
                'birth_date' => '1985-12-05',
                'email' => 'marco.argenti@example.com',
                'number_phone' => '+393456789222',
                'password' => Hash::make('password123'),
                'avatar_url' => 'https://via.placeholder.com/150',
                'bio' => 'Sono un musicista e produttore musicale.',
                'gender' => 'male',
                'status' => 'active',
            ],
            [
                'name' => 'Giulia',
                'surname' => 'Viola',
                'nickname' => 'gviola',
                'birth_date' => '2001-06-18',
                'email' => 'giulia.viola@example.com',
                'number_phone' => '+393456789333',
                'password' => Hash::make('password123'),
                'avatar_url' => 'https://via.placeholder.com/150',
                'bio' => 'Grafica e creativa, sempre alla ricerca di ispirazione.',
                'gender' => 'female',
                'status' => 'active',
            ],
            [
                'name' => 'Andrea',
                'surname' => 'Marrone',
                'nickname' => 'amarrone',
                'birth_date' => '1997-04-12',
                'email' => 'andrea.marrone@example.com',
                'number_phone' => '+393456789444',
                'password' => Hash::make('password123'),
                'avatar_url' => 'https://via.placeholder.com/150',
                'bio' => 'Amo i videogiochi e il mondo del gaming.',
                'gender' => 'male',
                'status' => 'active',
            ],
            [
                'name' => 'Chiara',
                'surname' => 'Rosa',
                'nickname' => 'crosa',
                'birth_date' => '1994-01-22',
                'email' => 'chiara.rosa@example.com',
                'number_phone' => '+393456789555',
                'password' => Hash::make('password123'),
                'avatar_url' => 'https://via.placeholder.com/150',
                'bio' => 'Fotografa freelance e amante della natura.',
                'gender' => 'female',
                'status' => 'active',
            ],
        ];

        // Inserisce gli utenti nel database
        foreach ($users as $user) {
            SocialUser::create($user);
        }
    }
}
