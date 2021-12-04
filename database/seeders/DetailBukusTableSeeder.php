<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DetailBukusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('detail_bukus')->delete();
        
        \DB::table('detail_bukus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'buku_id' => 1,
                'tgl_rilis' => '2021-12-01',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Elex Media Komputindo',
                'jumlah_halaman' => 109,
                'description' => 'Kali ini aku berharap kau bisa menganggap diriku sama berharganya, sama belajarnya bahwa kurentangkan waktu mendalami seni melipat luka-luka yang terbentuk dari keberadaan kita.Kita yang sementara, kita yang tak pernah mencium kepastian, kita dan khayalan busuk tentang hidup menua bersama.Kudampingi kau sampai hari ini saja, sisanya biar semesta memelukmu sejak kulepas dengan air mata.',
                'created_at' => '2021-12-04 17:15:09',
                'updated_at' => '2021-12-04 17:15:09',
            ),
            1 => 
            array (
                'id' => 2,
                'buku_id' => 2,
                'tgl_rilis' => '2021-12-01',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Gramedia Pustaka Utama',
                'jumlah_halaman' => 142,
                'description' => 'Menjadi publik fi gur di industri hiburan yang terlibat dalam berbagaiproyek fenomenal, memiliki fanbase yang senantiasa memberidukungan dengan penuh cinta, dan selalu tampil menawan di televisidengan kehidupan yang sempurna tampaknya menjadi impian semuaorang. Namun tahukah Anda, di balik para talent berbakat yang biasaAnda saksikan di layar kaca dan berbagai media lainnya, terdapat perankrusial seorang artist manager.Dibutuhkan kemampuan yang mumpuni untuk mengelola talent, klien,media, juga fans, agar tercipta sinergi yang baik. Sama seperti pekerjaanlainnya, menjadi artist manager memiliki tantangannya tersendiri.Karenanya, Artist Management 101 part 3: Seni untuk Menjadi yangTerbaik di Industri Hiburan hadir guna membantu Anda mengetahuiapa saja yang Anda perlukan untuk menjadi artist manager andal,di antaranya:• Bagaimana cara mengelola krisis yang muncul.• Bagaimana cara mengelola dan mengembangkan talent semaksimal mungkin sesuai bakat mereka.• Bagaimana cara menemukan, mempertahankan, dan menjaga hubungan baik dengan klien.• Bagaimana cara mengelola tim yang solid dan mampu menghadapi krisis dengan baik.',
                'created_at' => '2021-12-04 17:15:11',
                'updated_at' => '2021-12-04 17:15:11',
            ),
            2 => 
            array (
                'id' => 3,
                'buku_id' => 3,
                'tgl_rilis' => '2021-11-30',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Light Publishing',
                'jumlah_halaman' => 248,
                'description' => '"Lelahkah Anda dengan tantangan-tantangan Anda, terluka oleh pertempuran-pertempuran Anda, atau khawatir dunia Anda berputar tanpa kendali? Apakah pergumulan-pergumulan itu telah mencuri hidup dari kehidupan Anda? Jika ya, kitab Ester membawa kabar gembira: Pertolongan akan datang!Ratu Ester menyembunyikan identitas Yahudinya. Setahu siapa pun, dia orang Persia tulen. Tetapi kemudian datang dekrit kerajaan untuk menghabisi orang-orang sebangsanya. Dia harus mengambil beberapa pilihan sulit. Akankah dia tetap diam atau angkat bicara? Akankah dia berbaur atau tampil beda? Ester bisa saja menolak. Dia bisa gemetar ketakutan. Tetapi dia angkat bicara. Dia tampil beda. Dan Allah memakainya untuk menyelamatkan bangsa Israel. Bukan hiperbola untuk mengatakan bahwa keberanian Ester mengubah jalannya sejarah. Juga tidak berlebihan untuk dikatakan bahwa Allah dapat melakukan hal yang sama dengan Anda.Seperti Esther, Anda mungkin menatap situasi yang tampak mustahil. Dan apa yang berlaku untuk Ester juga berlaku untuk Anda: pembebasan akan datang. Kemenangan akan menjadi milik Allah. Dia akan menyelamatkan umat-Nya. Dia akan memperbaiki hal-hal yang salah di dunia ini. Pertanyaannya bukan, akankah Allah menang? Pertanyaannya adalah, Akankah Anda menjadi bagian dari tim itu?Dalam You Were Made for This Moment, Max Lucado — gembala sidang dan penulis buku terlaris New York Times— akan membantu Anda merebut kembali identitas kekal Anda sebagai warga negara surga, tambatkan harapan Anda pada Allah pembalikan besar, tumbuhkanlah keberanian untuk masa-masa sulit Anda, dan temukan peran Anda dalam cerita Allah. Anda tidak perlu dikalahkan oleh masa-masa sulit, Anda dapat dilepaskan oleh sang Pemenang: Allah kita. Anda diciptakan untuk momen ini."',
                'created_at' => '2021-12-04 17:15:12',
                'updated_at' => '2021-12-04 17:15:12',
            ),
            3 => 
            array (
                'id' => 4,
                'buku_id' => 4,
                'tgl_rilis' => '2021-11-26',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Gramedia Pustaka Utama',
                'jumlah_halaman' => 212,
                'description' => 'Indikasi geografis merupakan bagian dari hak kekayaan intelektual yang bermanfaat untuk memperjelas identifikasi produk, menghindari praktik persaingan, dan menjamin kualitas produk indikasi geografis sebagai produk asli. Kepemilikan indikasi geografis bermanfaat untuk memberikan kepercayaan pada konsumen, membina produsen lokal, serta meningkatkan produksi dan reputasi suatu kawasan indikasi geografis.Indonesia sebagai negara yang kaya dan melimpah akan sumber daya alam berpotensi menghasilkan budi daya nabati dari daratan maupun hayati kelautan yang mencirikan geografis di mana potensi itu berada. Sayangnya, sistem proteksi indikasi geografis di Indonesia masih merupakan sesuatu yang relatif baru.Buku ini menjelaskan apa itu indikasi geografis dan betapa pentingnya masyarakat Indonesia untuk menyadari pentingnya perlindungan produk indikasi geografis, seperti apa produk lokal yang dapat didaftarkan menjadi indikasi geografis, dan kendala yang hingga kini dialami dalam penerapan indikasi geografis di Indonesia.',
                'created_at' => '2021-12-04 17:15:13',
                'updated_at' => '2021-12-04 17:15:13',
            ),
            4 => 
            array (
                'id' => 5,
                'buku_id' => 5,
                'tgl_rilis' => '2021-11-26',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Gramedia Pustaka Utama',
                'jumlah_halaman' => 104,
                'description' => '"Tidak seorang pun menyangka seluruh dunia akan mengalami begitu banyak perubahan dalam waktu yang begitu singkat. Dunia dilanda pandemi, dan masa ini tentunya tidak mudah untuk kita. Banyak dari kita merasakan kehilangan di berbagai sisi kehidupan, kehilangan yang tidak mudah untuk kita atasi.Namun, bahkan di tengah masa-masa yang tidak pasti ini kita tetap bisa menemukan harapan dan kekuatan untuk bangkit… setiap hari dan setiap saat. Ada yang menemukannya ketika melihat perjuangan orang-orang di sekitar mereka, lewat perkataan sederhana seorang ayah, dan ada pula yang belajar sejak kecil bahwa kesulitan apa pun tak bisa mematikan harapan. Inilah yang ingin dibagikan kesembilan penulis lewat Semesta Cerita Kebangkitan Kita.Mudah-mudahan lewat kisah-kisah hangat dari para sahabat di Indosat Ooredoo yang dikurasi oleh Ika Natassa ini kita semua bisa menemukan semangat untuk #BisaBangkitBersama."',
                'created_at' => '2021-12-04 17:15:14',
                'updated_at' => '2021-12-04 17:15:14',
            ),
            5 => 
            array (
                'id' => 6,
                'buku_id' => 6,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Deepublish',
                'jumlah_halaman' => 111,
            'description' => 'Mendulang itu adalah kearifan lokal teknik Penambangan Emas Skala Kecil (PESK). Sejak era penjajahan banyak ditemui di Rantau Kuantan. Lokasi pendulangan bermula di daerah Logas pada aliran Sungai Singingi, dan Lubuk Jambi, Lubuk Ambacang pada aliran Sungai Indragiri. Saat itu pembagian pekerjaan berdasarkan gender sangat jelas. Kaum perempuan mendominasi pendulangan, sementara kaum lelaki bekerja di bagian lain, seperti menyadap karet, penambangan batu dan pasir serta lainnya. Buku EMAS RANTAU KUANTAN, Peti dan Upeti berisikan berbagai realita sosial yang ada di sekeliling kita, tanpa kita sadari semakin mengancam kehidupan kita. Lebih dari itu, juga berisikan pesan-pesan moral untuk kita agar kita selalu menjaga keseimbangan hidup di dunia dan kehidupan di akhirat nanti. Dengan demikian, diharapkan buku ini akan mampu membuka pintu hati dan pikiran kita sehingga kita semakin bijak dalam menjalani kehidupan ini.',
                'created_at' => '2021-12-04 17:15:16',
                'updated_at' => '2021-12-04 17:15:16',
            ),
            6 => 
            array (
                'id' => 7,
                'buku_id' => 7,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Deepublish',
                'jumlah_halaman' => 385,
            'description' => 'Kembali kepada hakikat dan tujuan besar dalam sebuah pendidikan yang bukan hanya sekadar pencapaian intelektual tetapi juga menumbuhkan potensi manusia pembelajar secara utuh dalam berbagai aspek perkembangan. Inilah yang dilakukan oleh SDS 01 Gula Putih Mataram melalui Primary 6 Personal Passion Project yang bertajuk OUR DREAMS FOR OUR COMMUNITY sebagai wujud dari merdeka belajar. Melalui Personal Passion Project ini murid memiliki peluang untuk membangun kecakapan hidup (life skills), menjadi pembelajar yang terbiasa mengatur dirinya sendiri (self directed), berpikir metakognitif (reflektif dengan pikiran dan tindakannya), berkomunikasi dan berbagai kecakapan terkait dan ini perlu dimulai sejak murid masih di tingkat sekolah dasar. Buku ini memberikan informasi secara lengkap tentang pengalaman murid dalam mengerjakan Personal Project Passion dari setiap kelas yaitu P6 Arthropods, P6 Molluscs, P6 Invertebrates dan P6 Vertebrates dimulai dari bagaimana mereka merumuskan tujuan project mereka yang dikaitkan dengan bakat dan minatnya, menguraikan tujuan akhir mereka melalui pertanyaan-pertanyaan penyelidikan dari berbagai konsep inquiry, dengan pengawasan guru mentor, guru kelas dan orang tua, murid mulai menganalisa kebutuhan instruksional, memilih kegiatan, memperkirakan waktu dan sumber daya, mempersiapkan tugas-tugas penting dalam perencanaan proyek agar berhasil hingga mewujudkannya dalam sebuah produk yang bisa dihadirkan dalam ruang pameran (booth) yang dirancang oleh murid sendiri, di mana selama pameran yaitu tanggal 22 Mei – 28 Mei 2021 para guru, murid dari kelas 1 hingga kelas 5 dan orang tua dapat bertanya langsung dan berdiskusi seputar project murid.',
                'created_at' => '2021-12-04 17:15:17',
                'updated_at' => '2021-12-04 17:15:17',
            ),
            7 => 
            array (
                'id' => 8,
                'buku_id' => 8,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Deepublish',
                'jumlah_halaman' => 120,
                'description' => 'Kebijakan pemerintah Indonesia saat ini masih berusaha menerapkan social dan physical distancing, salah satu tindakan yang tepat namun sekaligus menghentikan roda perekonomian, pariwisata dan juga pendidikan. Akibat diberlakukannya hal tersebut, secara serentak seluruh sekolah dari pendidikan usia dini sampai perguruan tinggi melaksanakan pembelajaran secara daring/online. Tentu saja hal ini merupakan suatu pengalaman baru di kalangan guru dan siswa. Pandemi yang terjadi memaksa agar semua komponen pendidikan untuk melakukan pembelajaran jarak jauh dengan menggunakan internet. Hal ini agar pendidikan bisa tetap berjalan walaupun di tengah pandemi.',
                'created_at' => '2021-12-04 17:15:18',
                'updated_at' => '2021-12-04 17:15:18',
            ),
            8 => 
            array (
                'id' => 9,
                'buku_id' => 9,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Deepublish',
                'jumlah_halaman' => 134,
            'description' => 'Buku ini meliputi; pendahuluan, konsep perencanaan, identifikasi masalah, prioritas masalah, alternatif pemecahan masalah, perumusan tujuan, pengambilan keputusan, perumusan kebijaksanaan, penyusunan rencana kebutuhan sumber daya, penyusunan rencana operasional, dan evaluasi. Dasar penyusunan buku ini dilatari oleh minimnya referensi bacaan dalam lingkungan akademik kesehatan, praktisi, ataupun masyarakat umum. Untuk meningkatkan kinerja dan mutu perencanaan program kesehatan, diperlukan suatu proses perencanaan dan evaluasi yang akan menghasilkan suatu rencana yang menyeluruh (komprehensif dan holistik). Perencanaan kesehatan adalah kegiatan yang perlu dilakukan di masa yang akan datang dan jelas tujuannya. Langkah-langkah perencanaan sebetulnya bersifat generik yaitu sama dengan alur pikir siklus pemecahan masalah, langkah-langkah pokok yang perlu dilakukan adalah: analisis situasi, identifikasi masalah dan menetapkan prioritas, menetapkan tujuan, melakukan analisis untuk memilih alternatif kegiatan terbaik, menyusun rencana operasional, hingga proses evaluasi.',
                'created_at' => '2021-12-04 17:15:19',
                'updated_at' => '2021-12-04 17:15:19',
            ),
            9 => 
            array (
                'id' => 10,
                'buku_id' => 10,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Deepublish',
                'jumlah_halaman' => 170,
                'description' => 'Adat nan taradat disebut cupak buatan dimana ia cupak aturan yang ditentukan oleh ahli adat Minangkabau pada zaman dahulu diantaranya Datuk Perpatiah Nan Sabatang dan Datuk Ketemanggungan. Dt. Ketemanggungan antara tahun 1163-1296 dan Dt. Perpatiah Nan Sabatang tahun 1165-1298. Pada masa Dt. Ketemanggungan dan Dt. Perpatiah nan Sabatang hidup dan pada masa itu syarak atau Islam telah berkembang di Minangkabau.',
                'created_at' => '2021-12-04 17:15:21',
                'updated_at' => '2021-12-04 17:15:21',
            ),
            10 => 
            array (
                'id' => 11,
                'buku_id' => 11,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Deepublish',
                'jumlah_halaman' => 56,
                'description' => 'Buku ini mendeskripsikan tentang persepsi dan pengalaman akademik dosen keolahragaan dalam mengemban tugasnya mengajar berbagai disiplin ilmu keolahragaan pada masa pandemi. Materi kuliah yang diajarkan terdiri dari berbagai macam jenis baik teori dan praktik pada jenjang sarjana di FKOR UNS. Seperti kita ketahui bahwa pembelajaran di bidang keolahragaan banyak bernuansa praktik di lapangan. Namun dengan adanya pandemi Covid-19 para dosen ditantang untuk menyelenggarakan pembelajarannya melalui e-learning. Buku ini mengupas tentang bagaimana pengalaman suka duka dosen dan persepsinya dalam mengawal pembelajaran melalui e-learning.',
                'created_at' => '2021-12-04 17:15:22',
                'updated_at' => '2021-12-04 17:15:22',
            ),
            11 => 
            array (
                'id' => 12,
                'buku_id' => 12,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Deepublish',
                'jumlah_halaman' => 137,
                'description' => 'Penulis berharap buku ini dapat menjadi bahan perenungan untuk menggali makna dari setiap aktivitas yang kita lalui. Sehingga langkah kaki ini dipenuhi dengan keberanian untuk berjuang dengan ilmu yang telah kita hayati dan menjadikannya sebagai bekal ibadah di akhirat kelak. Dan tak lupa penulis ingin mengucapkan terima kasih kepada Almarhum Bapak Slamet, Ibu Ratmi, Kak Adib, dan Mbak Nia serta Keluarga kecilnya. Mereka semua adalah support system saya selama ini. Dan untuk setiap orang yang pernah bertemu dan berpisah di kehidupan ini. Kalian telah merangkai puzzle dalam relung kehidupan pribadi saya. Kalian adalah sosok yang berharga di hati ini.',
                'created_at' => '2021-12-04 17:15:23',
                'updated_at' => '2021-12-04 17:15:23',
            ),
            12 => 
            array (
                'id' => 13,
                'buku_id' => 13,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Deepublish',
                'jumlah_halaman' => 212,
                'description' => 'Modal sosial adalah kekuatan terbesar bagi bangsa, selama ini kekuatan sosial telah diserang dari berbagai sisi, terciptalah ruang-ruang kosong. Sehingga kemandirian dan kepercayaan diri menurun drastis. Perlu upaya inovatif juga kreatif untuk membangkitkan kembali modal sosial tersebut sebagai amunisi ampuh guna menggalang mewujudkan ketahanan nasional, sebagai bangsa dan negara yang berdaulat. Mengisi ruang kosong adalah kumpulan artikel yang merangkum ragam gagasan itu. Buku ini sangat menarik karena ditulis dari pengalaman dan buah pikiran seorang tentara rakyat. Disajikan dengan bahasa yang santai. Diharapkan bisa menjadi referensi berharga masyarakat, untuk kejayaan Bangsa Indonesia yang besar dan berdaulat.',
                'created_at' => '2021-12-04 17:15:24',
                'updated_at' => '2021-12-04 17:15:24',
            ),
            13 => 
            array (
                'id' => 14,
                'buku_id' => 14,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Deepublish',
                'jumlah_halaman' => 198,
                'description' => 'Buku ini Ayah tulis sebagai wasiat untukmu, Anakku. Wasiat tentang hikmah dari pelajaran hidup yang pernah Ayah vi alami dan Ayah ambil dari orang-orang hebat di sekitar Ayah. Orang-orang hebat itu, tidak saja orang tua Ayah, Bundamu, sahabat-sahabat Ayah, orang-orang yang pernah Ayah kenal, tapi orang-orang hebat itu juga adalah dirimu. Ayah mengambil banyak pelajaran dari kehidupanmu. Engkau bukan hanya penyejuk hati dan mata Ayah, tapi engkau juga lentera saat Ayah sedang dalam kegelapan, sulit untuk melihat petunjuk, Allah turunkan kalian agar Ayah tersadar.',
                'created_at' => '2021-12-04 17:15:26',
                'updated_at' => '2021-12-04 17:15:26',
            ),
            14 => 
            array (
                'id' => 15,
                'buku_id' => 15,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Bitread Digital Publishing',
                'jumlah_halaman' => 142,
                'description' => 'Fiksimini basa sunda, seratan rèkaan nu panjang maksimalnya 150 kecap parantos ngarangkai janten hiji carita, tur diihtiaran aya rènjagan dina ahirna, atanapi iv Andrie Kustria Wardana plot twist tur surprise, ngalèok bènten maksad dina panungtungna. Sanaos upami sesah nganggè rènjagan, teu sawios ngaguluyur ogè, nu utami teu kirang ti 50 kecap teu ngalangkungan papagon maksimal 150 kecap.',
                'created_at' => '2021-12-04 17:15:27',
                'updated_at' => '2021-12-04 17:15:27',
            ),
            15 => 
            array (
                'id' => 16,
                'buku_id' => 16,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Bitread Digital Publishing',
                'jumlah_halaman' => 32,
                'description' => 'Tahukah kamu di Indonesia hidup gajah terkecil di dunia?Ada binatang yang panjang lidahnya hampir sama dengan tubuhnya!Afa juga burung yang pandai membangun rumah seperti arsitek.Yuk, berkenalan dengan mereka.',
                'created_at' => '2021-12-04 17:15:28',
                'updated_at' => '2021-12-04 17:15:28',
            ),
            16 => 
            array (
                'id' => 17,
                'buku_id' => 17,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Bitread Digital Publishing',
                'jumlah_halaman' => 140,
                'description' => 'Sudah menjadi suratan alam semesta siklus mengalami naik turun, namun fenomena tersebut bukan berarti harus dijadikan alasan hal yang wajar selama masih bisa disiasati. Naiknya siklus artinya, kondisi dalam keadaan baik-baik saja dan sebaliknya ketika siklus ada di posisi turun tentunya sedang ada apa-apanya.Konsistensi kegaduhan dan keberisikan berbagi makna selama tetap terjaga akan menghasilkan kehangatan di antara sesama tetap pada porsinya. Tidak akan ada apa-apa selama masih ada yang mencoba membangun suasana perlahan hangat.Kehangatan memang selalu dijadikan damba dan cita meski hangat tidak beda tipis dengan panas. Kebanyakan diri lebih suka hangat dibanding panas. Bukti nyata, hangat suasana lebih dirasakan nikmat ketimbang panas suasana.Perlahan hangat akan terus bergulir selama rel ketulusan masih dipilih untuk dijadikan pijakan dalam setiap langkah yang terkadang saling deru-menderu.Kehangatan tidak bisa dibangun dan diciptakan sendirian melainkan mesti ada diri yang sendiri namun tak pernah merasa menyendiri.Antara satu sama lain harus tetap berbagi cahaya surya bukan terik mentari, sebab cahaya surya akan memberikan kehangatan yang tiada ternilai harganya.Kehangatan akan tercipta manakala ucapan dan tindakan didasarkan pada sebuah cinta sesama manusia.Aku memandang, salah sebagai kesalahan dan benar sebagai kebenaran. Cinta kebenaran artinya cinta manusia.',
                'created_at' => '2021-12-04 17:15:29',
                'updated_at' => '2021-12-04 17:15:29',
            ),
            17 => 
            array (
                'id' => 18,
                'buku_id' => 18,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Bitread Digital Publishing',
                'jumlah_halaman' => 268,
                'description' => 'Seorang remaja yang belum pernah mengenal arti cinta, tiba-tiba terpana dengan wanita yang muncul di hadapannya. Entah muncul dari mana dan menghilang entah ke mana.“Mungkin hari ini aku akan bertemu dengannya,” perkataan yang berkali-kali pemuda itu ucapkan, tetapi banyaknya perkataan itu selaras dengan banyaknya kekecewaan pada dirinya.Takdir memang selalu tak adil, tetapi bukan berarti Yang Mahakuasa tidak ingin melihat umat-Nya terus bersedih karena mengenal cinta yang membuat orang lupa dengan segalanya.Mungkin Tuhan memang sayang pada orang itu dan membuatnya dipertemukan dengan seseorang yang telah ditakdirkan untuknya.',
                'created_at' => '2021-12-04 17:15:31',
                'updated_at' => '2021-12-04 17:15:31',
            ),
            18 => 
            array (
                'id' => 19,
                'buku_id' => 19,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Bitread Digital Publishing',
                'jumlah_halaman' => 110,
                'description' => 'Jika penderitaan hidup selama ini memaksa orang untuk meratapi dan menyesali keadaan, buku ini mencoba memberi kesempatan kepada siapa pun yang membacanya untuk mengenali dan menikmati kembali setiap proses dalam hidup yang menjadi bagian tak terpisahkan dari kehidupan. Rhyme in Sorrow merupakan kumpulan kata-kata yang lahir dari penghayatan akan kehidupan dan penderitaan. Sehimpun pikiran dan perasaan yang mewujud sebagai puisi. Puisi-puisi dalam buku ini memiliki karakter yang unik dalam penyusunannya. Memiliki rima dan masing-masing puisi hanya terdiri dari dua bait, puisi-puisi dalam buku ini diharapkan mampu memberikan kenyamanan pembacanya ketika membaca. Dalam proses kreatifnya, buku ini pun dibuat dalam rentang waktu yang tidak singkat mengingat kumpulan puisi didalamnya mencoba untuk menggambarkan kondisi sebenarnya dari alam perasaan dan berpikir penulis pada saat proses kreatif berlangsung. Selamat membaca, tabik!',
                'created_at' => '2021-12-04 17:15:32',
                'updated_at' => '2021-12-04 17:15:32',
            ),
            19 => 
            array (
                'id' => 20,
                'buku_id' => 20,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Bitread Digital Publishing',
                'jumlah_halaman' => 188,
                'description' => 'Budaya Jawa merupakan salah satu budaya yang menaruh perhatian lebih pada komunikasi. Hal ini dibuktikan dengan adanya ungkapan Jawa yang mengandung ajaran komunikasi “ajining dhiri saka kedaling lathi, ajining salira saka busana”. Ungkapan ini memiliki arti harfiah “nilai diri seseorang terletak pada gerak lidahnya, nilai badaniah seseorang terletak pada pakaiannya”. Ungkapan tersebut mengajarkan secara luas bahwa komunikasi verbal dan non-verbal perlu diperhatikan. Menjaga ucapan dan penampilan dalam berkomunikasi menjadi kandungan moral dari ungkapan ini. Selain ungkapan ini, terdapat banyak sekali ungkapan Jawa memuat ajaran komunikasi yang akan dibahas dalam buku ini.Buku ‘Komunikasi Cara Jawa’ ini merupakan hasil kajian analisis paremiologi dimana unit analisis yang digunakan adalah peribahasa, ungkapan, dan serat Jawa. Kajian analisis paremiologi masih sangat jarang dilakukan di Indonesia. Hal ini dibuktikan dengan sulitnya menemukan literatur penelitian paremiologi dari peneliti Indonesia. Kami harap buku ini dapat menjadi buku rujukan penelitian paremiologi serta komunikasi etnik. Selain itu, buku ini diharapkan dapat memberi kontribusi pada ilmu komunikasi dan pengetahuan mengenai budaya Jawa.',
                'created_at' => '2021-12-04 17:15:33',
                'updated_at' => '2021-12-04 17:15:33',
            ),
            20 => 
            array (
                'id' => 21,
                'buku_id' => 21,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Grasindo',
                'jumlah_halaman' => 242,
                'description' => 'Buku ini merupakan buku siswa yang dipersiapkan dalam rangka Implementasi Kurikulum 2013. Buku siswa ini disusun dan ditelaah oleh berbagai pihak di bawah koordinasi Penerbit Grasindo.Buku ini merupakan “dokumen hidup” yang senantiasa diperbaiki, diperbaharui, dan dimutakhirkan sesuai dengan dinamika kebutuhan dan perubahan zaman.',
                'created_at' => '2021-12-04 17:15:34',
                'updated_at' => '2021-12-04 17:15:34',
            ),
            21 => 
            array (
                'id' => 22,
                'buku_id' => 22,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Prenada Media',
                'jumlah_halaman' => 472,
            'description' => '"Dalam dunia yang serba modern saat ini lembaga keuangan memegang perananpenting dalam proses pembangunan nasional. Lembaga keuangan berfungsisebagai intermediatori antara masyarakat yang mempunyai dana danmasyarakat yang membutuhkan dana. Secara umum definisi dari tembagaKeuangan adalah “setiap perusahaan yang bergerak di bidang keuangan,menghimpun dana, menyalurkan dana atau kedua-duanya.”Pada Bagian Pertama buku ini yang terdiri dari sembilan bab yang membahastentang lembaga kevangan bank yang teridiri dari: (1) Overview Lembaga Kevangan;(2) Sejarah Bank; (3) Bank Indonesia; (4) Bank Umum; (5) Kegiatan Menerima Dana; (6)Kegiatan Menyalurkan Dana; (7) Kegiatan Layana Jasa; (8) Bank Syariah; dan (9) BPR.Dalam bab ini penulis mencoba menghadirkan suatu hal yang baru dengan memadukanpengalaman di bidang profesional sebagai seorang karyawan di industri perbankan,finance dan pasar modal yang dikombinasikan dengan pengalaman sebagai akaderdi beberapa perguruan tinggi selama belasan tahun lamanya.Pada Bagian Kedua buku ini yang terdiri dari sebelas bab, yang membahas tentanglembaga keuangan nonbank yang terdiri dari: (1) Fintech; (2) Perusahaan PembiayaanInfrastruktur; (3) Leasing; (4) Anjak Piutang; (5) Kartu Kredit, (6) Modal Ventura; (7) Pega-daian; (8) Asuransi; (9) Pasar Modal; (10). Pasar Uang dan Valuta Asing; dan (11) DanaPensiun yang juga tidak terlepas dari pengalaman penulis sebagai seorang profesionaldi bidang keuangan seperti di perusahaan leasing, di bidang pasar modal, di bidangasuransi dan bidang keuangan lainnya yang pernah bersentunan dengan pekerjaanyang lalu.Pada pembahasan Bagian Ketiga buku ini terdiri dari dua bab yang membahastentang lembaga keuangan independen merupakan suatu hal yang baru secara terpisahdari lembaga kevangan bank dan nonbank. Penulis menambahkan lembaga keuangan in-dependen sebagai salah satu unsur dalam lembaga keuagan yang secara fungsinya tidakmelakukan kegiatan menerima dana (saving), menyalurkan dana (lending/financing) danmelayani jasa (service). Lembaga keuangan independen menjalankan fungsinya sebagaipengaturan, pengawasan, pemeriksaan dan penyidikan serta penjamin kegiatan lembagakeuangan bank dan nonbank. Lembaga keuangan independen ini terdiri dar; 1) OtoritasJasa Keuangan (0)K), dan (2) Lembaga Penjamin Simpanan (LPS)."',
                'created_at' => '2021-12-04 17:15:36',
                'updated_at' => '2021-12-04 17:15:36',
            ),
            22 => 
            array (
                'id' => 23,
                'buku_id' => 23,
                'tgl_rilis' => '2021-11-25',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Gramedia Pustaka Utama',
                'jumlah_halaman' => 316,
                'description' => 'Polandia, negara yang mengibarkan bendera berwarna merah putihseperti Indonesia, tetapi dengan desain yang berbeda, terletak di jantungEropa. Negara ini terbentang di antara pegunungan, hutan, serta bukit,dan berjarak sejauh 13.000 kilometer dari Indonesia.Polandia dihuni hampir 40 juta orang. Di bagian barat, Polandia berbatasandengan Jerman dan di bagian timur berbatasan dengan Ukraina danBelarusia. Era globalisasi dan digital yang semakin berkembang dari tahunke tahun, baik di Polandia maupun Indonesia, menjadikan peluang keduanegara untuk saling mengenal semakin besar. Dengan perkembangandigital tersebut, proses perkenalan antara kedua negara terjadi secaraalamiah.Negara Polandia untuk Pemula merupakan panduan awal bagi Anda yangingin mengenal lebih jauh tentang seluk-beluk negara Polandia: sejarah,masyarakat, termasuk tradisinya.',
                'created_at' => '2021-12-04 17:15:37',
                'updated_at' => '2021-12-04 17:15:37',
            ),
            23 => 
            array (
                'id' => 24,
                'buku_id' => 24,
                'tgl_rilis' => '2021-11-24',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Kompas Penerbit Buku',
                'jumlah_halaman' => 258,
                'description' => 'Profesi psikolog adalah officium nobile. Suatu pekerjaan luhur yang diharapkan juga melekat pada nurani yang luhur, yang melebihi fungsinya sebagai sumber nafkah dan sumber penghasilan. Pemikiran tentang nilai dan etika pada profesi psikolog, kemudian dianggap kedua penulis—lewat pengalamannya selama 15 ta-hun mengajar mata kuliah Etika Psikologi—sebagai kunci untuk mengerti persoalan nilai dan etika dengan sederhana dan dekat dengan pengalaman lapangan.',
                'created_at' => '2021-12-04 17:15:38',
                'updated_at' => '2021-12-04 17:15:38',
            ),
            24 => 
            array (
                'id' => 25,
                'buku_id' => 25,
                'tgl_rilis' => '2021-11-24',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Kompas Penerbit Buku',
                'jumlah_halaman' => 306,
                'description' => 'Pengungkapan berbagai perasaan terdalam manusia. Kumpulan kisah hidup sehari-hari yang mencerminkan pandangan dunia dari sebuah sukubangsa Kalimantan dari perspektif orang dalam. Sesuatu yang menawarkan nilai-nilai kehidupan yang mungkin sangat berbeda dari yang dikenal dan dihayati mereka yang hidup di kota-kota besar',
                'created_at' => '2021-12-04 17:15:40',
                'updated_at' => '2021-12-04 17:15:40',
            ),
            25 => 
            array (
                'id' => 26,
                'buku_id' => 26,
                'tgl_rilis' => '2021-11-24',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Kompas Penerbit Buku',
                'jumlah_halaman' => 314,
            'description' => 'Tulisan-tulisan buku ini lahir dari keprihatinan, bagaimana bangsa Indonesia dapat mempertahankan harkat kemanusiaannya berhadapan dengan tantangan tak terelakkan modernitas. Buku ini terbagi atas empat bagian. Bagian pertama mempertanyakan bagaimana agama di abad ke 21 ini dapat tetap bermutu dan bermatabat. dalam bagian kedua, diangkat beberapa hal yang kalau kita tidak berani menyikapinya dengan benar, harkat kemanusiaan kita akan tenggelam, diantaranya sikap terhadap LGBT, hukuman mati, serta masa gelap pasca -G30S (1965), Fokus tulisan bagian ketiga adalah pendidikan karakter, syarat agar bangsa Indonesia tidak tenggelam di masa revolusi Industri 4.0. Bagian keempat berfokus pada filsafat. Filsafat memainkan peranan penting dalam alam akademis suatu bangsa dan harus demikian di Indonesia. filsafat bukannya tidak mempunyai keyakinan-keyakinan yang tidak dapat ditawar-tawar, tetapi secara prinsip terbuka pada diskursus dan argumentasi rasional.',
                'created_at' => '2021-12-04 17:15:41',
                'updated_at' => '2021-12-04 17:15:41',
            ),
            26 => 
            array (
                'id' => 27,
                'buku_id' => 27,
                'tgl_rilis' => '2021-11-24',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Kompas Penerbit Buku',
                'jumlah_halaman' => 194,
                'description' => 'Pasar modal semakin mudah di akses dan mearik minat berbagai kalangan, termasuk anak-anak muda. Buku ini menyajikan panduan bagi para investor yang baru masuk ke pasar modal. Idealnya, sebelum masuk ke pasar modal, para investor muda membekali diri dengan persiapan, seperti pengetahuan dasar tentang pasar modal. di buku ini, pembaca tidak hanya dapat memperoleh pengetahuan dasar bagaimana berinvestasi, tetapi juga tips-tips berinvestasi pada saham. selain itu ada pula petunjuk mengenai apa yang sebaiknya tidak dilakukan di pasar modal.',
                'created_at' => '2021-12-04 17:15:42',
                'updated_at' => '2021-12-04 17:15:42',
            ),
            27 => 
            array (
                'id' => 28,
                'buku_id' => 28,
                'tgl_rilis' => '2021-11-24',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Kompas Penerbit Buku',
                'jumlah_halaman' => 322,
            'description' => 'Kereta api salah satu moda transportasi yang banyak diminati masyarakat. Alasannya, bebas hambatan sehingga cepat perjalanannya. Adanya kereta api di Jakarta, Bogor, Depok, Tangerang Bekasi (Jabodetabek) telah membentuk pusat permukiman, perkantoran, dan pemerintahan.',
                'created_at' => '2021-12-04 17:15:44',
                'updated_at' => '2021-12-04 17:15:44',
            ),
            28 => 
            array (
                'id' => 29,
                'buku_id' => 29,
                'tgl_rilis' => '2021-11-24',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Kompas Penerbit Buku',
                'jumlah_halaman' => 314,
                'description' => 'Hadirnya buku ini untuk menyambung literatur yang lebih lengkap mengenai kooperasi kredit. Senuah kooperasi yang bercirikan gerakan pembebasan dari kemiskinan dan pemberdayaan komunitas masyarakat yang dianggap \'\'lemah\'\', terpinggirkan, tapi sebenernya kaya dan berday. sebagian besar yang ditulis dalam buku ini bukan sekedar bersumber dari literatur yang ada, tetapi terlebih dilandasi pengalaman pertama penulis yang secara dekat dan mendalam ikut serta mendirikan, mengelola, dan menyebarkan Credit UnionGerakan Daulat Rakyat ke berbagai wilayah Tanah Air selama 20 tahun terakhir.',
                'created_at' => '2021-12-04 17:15:45',
                'updated_at' => '2021-12-04 17:15:45',
            ),
            29 => 
            array (
                'id' => 30,
                'buku_id' => 30,
                'tgl_rilis' => '2021-11-24',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Kompas Penerbit Buku',
                'jumlah_halaman' => 170,
                'description' => 'SELAIN PILKADA LANGSUNG sebagai wujud otonomi yang telah mengubah secara fundamental peta kekuatan politik di daerah, komitmen pemerintah pusat dalam mewujudkan otonomi daerah juga terlihat jelas dengan peningkatan signifikan anggaran keuangan yang ada dalam kontrol pemerintah daerah, utamanya di tingkat kabupaten/kota',
                'created_at' => '2021-12-04 17:15:46',
                'updated_at' => '2021-12-04 17:15:46',
            ),
            30 => 
            array (
                'id' => 31,
                'buku_id' => 31,
                'tgl_rilis' => '2021-11-24',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Kompas Penerbit Buku',
                'jumlah_halaman' => 434,
            'description' => 'Islam adalah agama yang membawa misi rahmat bagi semesta alam (rahmah li al-\'alamin), yang mengajarkan kedamaian, toleransi, dan kerukunan dalam kehuidupan masyarakat dan negara. Munculnya tindak kekerasan yang dilakukan oleh kelompok radikal, ekstrem, dan kelompok jihadi sebenernya hanya didasarkan pada teks-teks Al-Quran dan Hadits yang dipahami secara literal',
                'created_at' => '2021-12-04 17:15:48',
                'updated_at' => '2021-12-04 17:15:48',
            ),
            31 => 
            array (
                'id' => 32,
                'buku_id' => 32,
                'tgl_rilis' => '2021-11-24',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Kompas Penerbit Buku',
                'jumlah_halaman' => 242,
                'description' => 'Penggunaan internet dan gawai adalah keniscayaan bagi generasi muda dalam konteks kehidupan modern masa kini, apalagi di tengah pandemi. Namun, sisi negatif penggunaan internet dan gawai semakin mengemuka. Selama ini banyak informasi yang berlalu lalang di media massa, termasuk dalam dunia maya, yang membuat remaja bisa salah memilih informasi, dan nyatanya banyak pandangan yang sekedar memojokkan remaja dalam penggunaan internet dan gawai',
                'created_at' => '2021-12-04 17:15:49',
                'updated_at' => '2021-12-04 17:15:49',
            ),
            32 => 
            array (
                'id' => 33,
                'buku_id' => 33,
                'tgl_rilis' => '2021-11-24',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Kompas Penerbit Buku',
                'jumlah_halaman' => 522,
            'description' => 'Globalisasi yang melahirkan kenyataan dunia tanpa batas (borderless world) juga menuntut kita memikirkan ulang tentang batas-batas negara secara tradisional, identitas, kedaulatan dan otonomi sebagai bangsa, serta implikasi lebih lanjut di bidang politik, keamanan, ekonomi, budaya, wilayah, dan demografi. Dari dimensi itu, wacana mengenai globalisasi, transformasi sosial budaya, dan daya saing masyarakat dan negara, dengan konsep-konsep dan teori-teorinya dapat dipetakan dalam sebuah kerangka berpikir dan pemahaman terikat yang komprenhensif',
                'created_at' => '2021-12-04 17:15:51',
                'updated_at' => '2021-12-04 17:15:51',
            ),
            33 => 
            array (
                'id' => 34,
                'buku_id' => 34,
                'tgl_rilis' => '2021-11-24',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Kompas Penerbit Buku',
                'jumlah_halaman' => 426,
                'description' => 'Kontak-kontak kebudayaan dalam lintasan geohistorissebelumnya telah memungkinkan adanya bangunan kesepahaman bersama pentingnya pembentukan negara bangsa. Kesepahaman ini disempurnakan bentuknya oleh kelompok cerdik cendekiawan, dan dimodifikasi dalam wajah kekinian seiring tantangan globalisasi yang menyeruak masuk dalam berbagai lini kehidupan warga negaranya.',
                'created_at' => '2021-12-04 17:15:52',
                'updated_at' => '2021-12-04 17:15:52',
            ),
            34 => 
            array (
                'id' => 35,
                'buku_id' => 35,
                'tgl_rilis' => '2021-11-24',
                'bahasa' => 'Indonesian',
                'negara' => 'Indonesia',
                'penerbit' => 'Kompas Penerbit Buku',
                'jumlah_halaman' => 122,
                'description' => 'Semua orang, tanpa terkecuali, akan mengalami masa kelam dalam hidupnya. Ini bisa berupa menderita penyakit kronis, kehilangan pekerjaan, perceraian, ataupun depresi, dan lain sebagainya. Sering kali, ini terjadi kepada orang di sekitar kita, contohnya keluarga atau teman dekat, dan meskipun kita ingin membantu, tetapi seringnya kita tidak tahu apa yang harus kita lakukan. Malah, apa yang kita lakukan justru memperburuk situasi.',
                'created_at' => '2021-12-04 17:15:54',
                'updated_at' => '2021-12-04 17:15:54',
            ),
        ));
        
        
    }
}