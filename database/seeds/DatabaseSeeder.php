<?php

use Illuminate\Database\Seeder;
use database\factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\User;
use App\Post;
use App\Category;

class DatabaseSeeder extends Seeder
{
    use hasFactory;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        User::factory(3)->create();
        
        User::create([
            'name' => "Syahnan Afifah",
            'username' => "syhnnzhra",
            'email' => "syhnnzhra@gmail.com",
            'password' => bcrypt('12345')
        ]);

        Category::create([ 'name' => 'Web Programming', 'slug' => 'web-programming' ]);
        Category::create([ 'name' => 'Web Design', 'slug' => 'web-design' ]);
        Category::create([ 'name' => 'Personal', 'slug' => 'personal' ]);
        
        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'I wanna be U', 
        //     'category_id' => 1, 
        //     'slug' => 'I-wanna-be-u', 
        //     'excerpt' => 'Medeia telah memenangkan sayembara menjadi putri mahkota, namun tiba-tiba saja Putra Mahkota Iaros memilih Psyche jadi calon pengantinya! Penuh amarah, Medeia bertekad merebut segalanya kembali dari Pysche. Sayang sekali, jiwa mereka malah tertukar....', 
        //     'body' => 'Bercerita tentang 2 putri bangsawan bernama Psyche Poli (Putri Tunggal Keluarga Count Poli) dan Medeia Beliard (Anak kedua, Putri Pertama Keluarga Duke Beliard) untuk merebutkan posisi putri kerajaan, dan hati putra mahkota pewaris utama kekaisaran Eperanto : Iaros Orona Eperanto. Medeia Beliard yang telah memenangkan sayembara menjadi putri mahkota. Namun, tiba-tiba saja Putra Mahkota Iaros Orona Eperanto memilih Psyche Poli jadi calon pengantinya! Medeia bertekad merebut segalanya kembali dari Pysche. Di hari berdoa kedua wanita cantik tersebut terjatuh dalam kolam di kuil Dewa Eperanto. Doa Medeia dikabulkan oleh Dewa namun dengan cara yang tak terduga, jiwa Medeia tertukar dengan Psyche. Kisah tentang kerajaan yang penuh intrik dan adu strategi pun dimulai diantara para tokohnya. Dimalam saat ulang tahun putra mahkota Iaros bertekad untuk membunuh Psyche tunangannya dan membuat tudingan pembunuhan terhadap Keluarga Duke Beliard terutama Medeia Beliard. Medeia yang ada di dalam tubuh Psyche harus bertarung terhadap 5 Knight terlatih pengawal setia Iaros. Apa yang akan terjadi pada Medeia???. Bagaimana nasib Pysche yang ada di dalam tubuh Media??, Dari manakah kemampuan suci pertukaran tubuh tersebut??, Akankah mereka dapat kembali ke tubuh masing2 setelah bertukar???, Bagaimana reaksi Iaros selanjutnya??, apakah keluarga Duke Beliard akan hancur??',
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Assassins creed : Forgotten Temple', 
        //     'category_id' => 2, 
        //     'slug' => 'assasins-creed-forgotten-temple',
        //     'excerpt' => 'Forgotten Temple akan melanjutkan kisah Edward Kenway setelah peristiwa di dalam video game populer Assassins Creed IV: Black Flag. Petualangan baru yang sangat epik ini memperlihatkan Privateer yang akan berubah menjadi bajak laut setelah terlibat secara penuh ke dalam Assassin Brotherhood.',
        //     'body' => 'Dalam Assassins Creed: Forgotten Temple, Edward Kenway memiliki misi berbahaya untuk menemukan Pieces of Eden di pantai laut Asia Tenggara. Diketahui, Pieces of Eden adalah jenis teknologi canggih yang diciptakan oleh makhluk humanoid kuno, Isu, dan Neurotransmiter yang direkayasa ke dalam otak manusia. Selain itu, Endward Kenway juga akan berhadapan dengan musuh baru yang misterius. Assassins Creed: Forgotten Temple juga akan memperkenalkan Noa, seorang keturunan Korea-Amerika dari Edward Kenway, yang menyelidiki masa lalu Assassin sambil mencari informasi tentang keluarganya. Seri webcomic tersebut akan menggabungkan elemen petualangan sejarah dan aksi masa ini dengan alur cerita yang segar. Tentunya hal tersebut akan menarik minat pembaca yang baru mengenal franchise tersebut.',
        //     'user_id' => 1
        // ]);
    }
}
