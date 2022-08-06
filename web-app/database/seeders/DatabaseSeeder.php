<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Posting;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        Posting::create ([
        "Title" => "Fiqih Ramdhani",
        "Judul_Posting" => "My Profile",
        "user_id"=>1,
        "category_id" => 2,
        "slug"  => "judul-Pertama",
        "img"   => "Baru.jpg",
        "excerpt"  => "Saya adalah Fiqih Ramdhani , Lahir 11 Januari 1997 di Jakarta Barat. Saya adalah seorang Web dan Graphic Designer . Saya lulus tahun 2014 dari SMAN 94 Jakarta Barat. Pengalaman kerja Saya yaitu seorang salesman Indihome dan seorang Pramusaji di kedai Rebusan.  ",
        "Body" => "Saya adalah Fiqih Ramdhani , Lahir 11 Januari 1997 di Jakarta Barat. Saya adalah seorang Web dan Graphic Designer . Saya lulus tahun 2014 dari SMAN 94 Jakarta Barat. Pengalaman kerja Saya yaitu seorang salesman Indihome dan seorang Pramusaji di kedai Rebusan."

        ]);


        Posting::create ([
        "Title" => "Bali",
        "Judul_Posting" => "Pulau Bali",
        "user_id" => 1,
        "category_id" => 1,
        "slug"  => "judul-kedua",
        "img"   => "Bali.webp",
        "excerpt"  =>  "Bali merupakan salah satu tempat destinasi wisata yang sering di kunjungi oleh Wisatawan Lokal ataupun Wisatawan Mancanegara . Dengan kebudayaannya yang unik dan View pantai  yang exotic menjadikan Bali sebagai tempat Wisata favorite untuk para Wisatawan. Jangan lupa untuk Sun Bathing di Pantai Kuta.",
        "Body" => "Bali (bahasa Bali: ᬩᬮᬶ) adalah sebuah provinsi di Indonesia yang ibu kotanya bernama Denpasar. Provinsi Bali terletak di bagian barat Kepulauan Nusa Tenggara. Di awal kemerdekaan Indonesia, pulau ini termasuk dalam Provinsi Sunda Kecil yang beribu kota di Singaraja, dan kini terbagi menjadi 3 provinsi, yakni Bali, Nusa Tenggara Barat, dan Nusa Tenggara Timur .[9][10] Pada tahun 2020, penduduk provinsi Bali berjumlah 4.317.404 jiwa, dengan kepadatan 747 jiwa/km2.[4]
Selain terdiri dari pulau Bali, wilayah provinsi Bali juga terdiri dari pulau-pulau yang lebih kecil di sekitarnya, yaitu pulau Nusa Penida, pulau Nusa Lembongan, pulau Nusa Ceningan, Pulau Serangan, dan Pulau Menjangan. Secara geografis, Bali terletak di antara Pulau Jawa dan Pulau Lombok. Mayoritas penduduk Bali adalah pemeluk agama Hindu.[5] Di dunia, Bali terkenal sebagai tujuan pariwisata dengan keunikan berbagai hasil seni-budayanya, khususnya bagi para wisatawan Jepang dan Australia. Bali juga dikenal dengan julukan Pulau Dewata dan Pulau Seribu Pura. "

    ]);

    Posting::create ([
       "Title" => "Jawa Tengah",
       "Judul_Posting" => "Candi  Borobudhur",
       "user_id"=>1,
       "category_id" => 1,
        "slug"  => "judul-ketiga",
        "img"   => "Candi.jpeg",
        "excerpt"  => "Jawa Tengah mimiliki tempat wisata yang bernama Candi Borobudur . Candi Borobudur sudah
        tercatat oleh UNESCO sebagai Situs Warisan Dunia. Candi Borobudur sangat cocok untuk kalian yang ingin berwisata edukatif . Karna selain mempunyai nilai sejarah ,Candi Borobudur mempunyai asitektur yang sangat kokoh",
       "Body" => "Candi Borobudur (bahasa Jawa: ꦕꦤ꧀ꦝꦶ​ꦧꦫꦧꦸꦝꦸꦂ, translit. Candhi Båråbudhur) adalah sebuah candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah, Indonesia. Candi ini terletak kurang lebih 100 km di sebelah barat daya Semarang, 86 km di sebelah barat Surakarta, dan 40 km di sebelah barat laut Yogyakarta. Candi dengan banyak stupa ini didirikan oleh para penganut agama Buddha Mahayana sekitar tahun 800-an Masehi pada masa pemerintahan wangsa Syailendra. Borobudur adalah candi atau kuil Buddha terbesar di dunia,[2][3] sekaligus salah satu monumen Buddha terbesar di dunia.[4]
Monumen ini terdiri atas enam teras berbentuk bujur sangkar yang di atasnya terdapat tiga pelataran melingkar, pada dindingnya dihiasi dengan 2.672 panel relief dan aslinya terdapat 504 arca Buddha.[5] Borobudur memiliki koleksi relief Buddha terlengkap dan terbanyak di dunia.[4] Stupa utama terbesar teletak di tengah sekaligus memahkotai bangunan ini, dikelilingi oleh tiga barisan melingkar 72 stupa berlubang yang di dalamnya terdapat arca Buddha tengah duduk bersila dalam posisi teratai sempurna dengan mudra (sikap tangan) Dharmachakra mudra (memutar roda dharma).
Monumen ini merupakan model alam semesta dan dibangun sebagai tempat suci untuk memuliakan Buddha sekaligus berfungsi sebagai tempat ziarah untuk menuntun umat manusia beralih dari alam nafsu duniawi menuju pencerahan dan kebijaksanaan sesuai ajaran Buddha.[6] Para peziarah masuk melalui sisi timur dan memulai ritual di dasar candi dengan berjalan melingkari bangunan suci ini searah jarum jam, sambil terus naik ke undakan berikutnya melalui tiga tingkatan ranah dalam kosmologi Buddha. Ketiga tingkatan itu adalah Kāmadhātu (ranah hawa nafsu), Rupadhatu (ranah berwujud), dan Arupadhatu (ranah tak berwujud). Dalam perjalanannya para peziarah berjalan melalui serangkaian lorong dan tangga dengan menyaksikan tak kurang dari 1.460 panel relief indah yang terukir pada dinding dan pagar langkan. "

]);


Posting::create ([
        "Title" => "Papua",
         "Judul_Posting" => "Raja Ampat",
         "user_id"=>1,
        "category_id" => 1,
        "slug"  => "judul-keempat",
        "img"   => "Raja Ampat.jpeg",
        "excerpt"  => "Papua memiliki pesona alam yang masih sangat terjaga. Salah satu destinasi wisata yang
        berada di Papua adalah Raja Ampat. Keindahan Alamnya membuat banyak Wisatawan yang ingin mengunjungi Raja Ampat.
        Raja Ampat sangat cocok untuk anda yang ingin menenangkan diri dari pikiran yang suntuk .",
        "Body" =>"Asal mula nama Raja Ampat menurut mitos masyarakat setempat berasal dari seorang wanita yang menemukan tujuh telur. Empat butir di antaranya menetas menjadi empat orang pangeran yang berpisah dan masing-masing menjadi raja yang berkuasa di Waigeo, Salawati, Misool Timur dan Misool Barat. Sementara itu, tiga butir telur lainnya menjadi hantu, seorang wanita, dan sebuah batu.
Selanjutnya dari sejarah tersebut beredar mitos yang dipercaya masyarakat, bahwa salah satu anak yang menetas dari telur tersebut bernama Pin Tike hamil tanpa suami. Peristiwa itu menyebabkan saudara-saudaranya malu. Karena itu, dia dihanyutkan oleh saudara-saudaranya ke laut. Pin Tike terdampar di Pulau Numfor dan bertemu dengan Manar Maker, seorang tokoh mitos masyarakat Biak -Numfor. "
   ]);


Posting::create ([
        "Title" => "Tarian dan Kebudayaan Indonesia",
        "Judul_Posting" => "Tari Kecak",
        "user_id"=>1,
        "category_id" => 1,
        "slug"  => "judul-kelima",
        "img"   => "Kecak.jpg",
        "excerpt"  => " Tarian Kecak yaitu salah satu satu tarian yang cukup populer di Pulau Bali. Tak hanya terkenal saja, tarian ini biasanya juga digunakan sebagai upacara penyambutan tamu, maupun upacara keagamaan. Tari Kecak merupakan salah satu tarian yang berasal dari Bali. Tarian ini disebut juga dengan nama Tari Api atau Tari Cak. Tarian ini adalah tarian pertunjukan hiburan massal. Tarian ini dipentaskan oleh beberapa penari laki-laki, dengan mengenakan kain penutup kotak-kotak berwarna hitam putih seperti bentuk dari papan catur. ",
        "Body" => "Tarian Kecak adalah pertunjukan dramatari seni khas Bali yang lebih utama menceritakan mengenai Ramayana dan dimainkan terutama oleh laki-laki. Tarian ini dipertunjukkan oleh banyak puluhan atau lebih penari laki-laki yang duduk berbaris melingkar dan dengan irama tertentu menyerukan cak dan mengangkat kedua lengan, menggambarkan kisah Ramayana saat barisan kera membantu Rama melawan Rahwana. Namun, Kecak berasal dari ritual sanghyang, yaitu tradisi tarian yang penarinya akan berada pada kondisi tidak sadar, melakukan komunikasi dengan Tuhan atau roh para leluhur dan kemudian menyampaikan harapan-harapannya kepada masyarakat.
Para penari yang duduk melingkar tersebut mengenakan kain kotak-kotak seperti papan catur melingkari pinggang mereka. Selain para penari itu, ada pula para penari lain yang memerankan tokoh-tokoh Ramayana seperti Rama, Shinta, Rahwana, Hanoman, dan Sugriwa.
Lagu tari Kecak diambil dari ritual tarian sanghyang. Selain itu, tidak digunakan alat musik. Hanya digunakan kincringan yang dikenakan pada kaki penari yang memerankan tokoh-tokoh Ramayana.
Sekitar tahun 1930-an Wayan Limbak bekerja sama dengan pelukis Jerman Walter Spies menciptakan tari Kecak berdasarkan tradisi Sanghyang dan bagian-bagian kisah Ramayana. Wayan Limbak memopulerkan tari ini saat berkeliling dunia bersama rombongan penari Bali-nya. "
]);

Posting::create ([
        "Title" => "Tarian dan Kebudayaan Indonesia",
        "Judul_Posting" => "Tari Reog Ponorogo",
        "user_id"=>1,
        "category_id" => 1,
        "slug"  => "judul-keenam",
        "img"   => "Reog.jpg",
        "excerpt"  => "  Ponorogo merupakan kesenian yang menceritakan perang antara Kerajaan Kediri dan Kerajaan Bantarangin. Reog Ponorogo modern biasanya dipentaskan dalam beberapa acara, seperti pernikahan, khitanan, dan hari-hari besar Nasional. Pementasannya terdiri dari beberapa rangkaian, yakni dua sampai tiga tarian pembuka.",
        "Body" => "Reog (aksara Jawa: ꦫꦺꦪꦺꦴꦒ꧀, Réyog) adalah tarian tradisional dalam arena terbuka yang berfungsi sebagai hiburan rakyat, mengandung unsur magis, penari utama adalah orang berkepala singa dengan hiasan bulu merak, ditambah beberapa penari bertopeng dan berkuda lumping dan Reog asli dari Indonesia  Reog merupakan salah satu seni budaya yang berasal dari Jawa Timur bagian barat-laut, dan Ponorogo dianggap sebagai kota asal Reog yang sebenarnya. Gerbang kota Ponorogo dihiasi oleh sosok warok dan gemblak, dua sosok yang ikut tampil pada saat Reog dipertunjukkan. Reog adalah salah satu budaya daerah di Indonesia yang masih sangat kental dengan hal-hal yang berbau mistik dan ilmu kebatinan yang kuat.
Reog Sebuah seni pertunjukan tua yang bertahan dari gempuran zaman. Memiliki nilai seni sekaligus nilai-nilai luhur. Reog Ponorogo adalah bentuk kesenian yang tumbuh berabad-abad lalu. Reog merupakan salah satu seni budaya yang berasal dari Jatim bagian barat-laut dan Ponorogo dianggap sebagai kota asal Reog yang sebenarnya. Gerbang kota Ponorogo dihiasi oleh sosok warok dan gemblak, dua sosok yang ikut tampil pada saat Reog dipertunjukkan. Reog adalah salah satu budaya daerah di Indonesia yang masih sangat kental dengan hal-hal yang berbau mistik dan ilmu kebatinan yang kuat. Tarian tradisional dalam arena terbuka yang berfungsi sebagai hiburan rakyat, mengandung unsur magis, penari utama adalah orang berkepala singa dengan hiasan bulu merak, ditambah beberapa penari bertopeng dan berkuda lumping. Ada dua ragam bentuk reog Ponorogo yang dikenal saat ini, yakni Reog Obyog dan Reog Festival. Reog modern biasanya dipentaskan dalam beberapa acara seperti pernikahan, khitanan, dan hari-hari besar Nasional. Seni Reog Ponorogo terdiri dari beberapa rangkaian 2 sampai 3 tarian pembukaan. Reog obyog Sering pentas di pelataran atau jalan tanpa mengikuti pakem tertentu. Biasanya mengisi acara hajatan, bersih desa, hingga pementasan semata untuk menghibur. Sedangkan Reog Festival sudah mengalami modifikasi dan ditampilkan sesuai pakem dalam acara tahunan Festival Reog yang diadakan Pemerintah Kota Ponorogo sejak 1997. Berdasarkan lokakarya pengusulan ICH UNESCO tanggal 15-16 Februari 2022, Reog Ponorogo masuk Daftar Warisan Budaya Tak benda (WBTb) UNESCO (United Nations Educational, Scientific and Cultural Organization). "
]);


Posting::create ([
        "Title" => "Tarian dan Kebudayaan Indonesia",
        "Judul_Posting" => "Tari Jaipong",
        "user_id"=>1,
        "category_id" => 1,
        "slug"  => "judul-ketujuh",
        "img"   => "Jaipong.jpg",
        "excerpt"  => " Jaipongan (aksara Sunda: ᮏᮄᮕᮧᮌᮔ᮪) adalah sebuah jenis tari pergaulan tradisional masyarakat Sunda yang berasal dari wilayah Karawang dan sangat populer di Indonesia.",
        "Body" => "Jaipongan terlahir melalui proses kreatif dari tangan dingin H. Suanda sekitar tahun 1976 di Karawang, Jaipongan merupakan garapan yang menggabungkan beberapa elemen seni tradisi Karawang seperti pencak silat, wayang golek, topeng banjet, ketuk tilu dan lain-lain. Jaipongan di Karawang pesat pertumbuhannya di mulai tahun 1976, ditandai dengan munculnya rekaman Jaipongan SUANDA GROUP dengan instrumen sederhana yang terdiri dari gendang, ketuk, kecrek, goong, rebab dan sinden atau juru kawih. Dengan media kaset rekaman tanpa label tersebut (indi label) Jaipongan mulai didistribusikan secara swadaya oleh H Suanda di wilayah Karawang dan sekitarnya. Tak disangka Jaipongan mendapat sambutan hangat, selanjutnya Jaipongan menjadi sarana hiburan masyarakat Karawang dan mendapatkan apresiasi yang cukup besar dari segenap masyarakat Karawang dan menjadi fenomena baru dalam ruang seni budaya Karawang, khususnya seni pertunjukan hiburan rakyat. Posisi Jaipongan pada saat itu menjadi seni pertunjukan hiburan alternatif dari seni tradisi yang sudah tumbuh dan berkembang lebih dulu di Karawang seperti pencak silat, topeng banjet, ketuk tilu, tarling dan wayang golek. Keberadaan jaipong memberikan warna dan corak yang baru dan berbeda dalam bentuk pengemasannya, mulai dari penataan pada komposisi musikalnya hingga dalam bentuk komposisi tariannya. "
        ]);

        Posting::create ([
        "Title" => "Web-Programming",
        "Judul_Posting" => "HTML",
        "user_id"=>1,
        "category_id" => 3,
        "slug"  => "judul-kedelapan",
        "img"   => "Komputer.jpg",
        "excerpt"  => " Hypertext Markup Language (HTML) adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet. Ini dapat dibantu oleh teknologi seperti Cascading Style Sheets (CSS) dan bahasa scripting seperti JavaScript dan VBScript.",
        "Body" => "Hypertext Markup Language (HTML) adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet. Ini dapat dibantu oleh teknologi seperti Cascading Style Sheets (CSS) dan bahasa scripting seperti JavaScript dan VBScript.
Peramban internet menerima dokumen HTML dari server web atau dari penyimpanan lokal dan membuat dokumen menjadi halaman web multimedia. HTML menggambarkan struktur halaman web secara semantik dan isyarat awal yang disertakan untuk penampilan dokumen.
Elemen HTML digambarkan oleh tag, ditulis menggunakan tanda kurung sudut. Tag seperti <img /> dan <input /> langsung perkenalkan konten ke dalam halaman. Tag lain seperti <p> mengelilingi dan memberikan informasi tentang teks dokumen dan mungkin menyertakan tag lain sebagai sub-elemen. Peramban tidak menampilkan tag HTML, tetapi menggunakannya untuk menafsirkan konten halaman.
HTML dapat menyematkan program yang ditulis dalam bahasa scripting seperti JavaScript, yang memengaruhi perilaku dan konten halaman web. Dimasukkannya CSS mendefinisikan tampilan dan tata letak konten. World Wide Web Consortium (W3C), mantan pengelola HTML dan pemelihara standar CSS saat ini, telah mendorong penggunaan CSS pada HTML presentasi eksplisit sejak 1997."

]);



       User::create ([
    "name" => "Fiqih Ramdhani",
    "Email" => "fiqih.ramdhani1213@gmail.com",
    "password"=> bcrypt('12345')

]);



    }
}
