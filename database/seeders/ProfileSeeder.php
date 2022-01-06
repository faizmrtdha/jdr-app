<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProfileSeeder extends Seeder
{

    public function run()
    {

      Profile::create([
        'title' => 'Logo Meaning',
        'slug' => 'Logo-Meaning',
        'category' => '1',
        'content' => '<ol><li>A golden yellow buffalo in the Java language known as Kebomas is a tribute to the area where the company PT Petrokimia Gresik domiciled, namely District Kebomas in Gresik. Buffalo is a symbol of the farmers who are loyal companions, not wild, brave, and hard-working.</li><li><span xml:lang="en" lang="en">Five-pointed green leaves petals symbolizing the five principles of Pancasila. While writing PG is an abbreviation of the company name PETROKIMIA G</span>RESIK<span xml:lang="en" lang="en">.</span></li><li>Golden yellow color in the picture buffalo represents majesty, triumph, and magnanimity. Mix and match the green sepals five-pointed depicting fertility and prosperity.</li><li>PG white writing reflects purity, honesty, and purity. While a black border on all components of the logo represents the authority and elegance.</li><li>The black color in writing of the name of the company symbolizes the depth, stability, and firm faith. Strong values that always supports the entire work process.</li></ol>',
        'img' => ''
    ]);
    Profile::create([
        'title' => 'Vision, Mission and Corporate Culture',
        'slug' => Str::slug('Vision, Mission and Corporate Culture', '-'),
        'category' => '1',
        'content' => '<p class="MsoNormal"><span class="hps"><strong><span xml:lang="en-us"
        lang="en-us">VISION</span></strong></span><span xml:lang="en-us" lang="en-us"><br><br><span
    class="hps">Being a</span> <span class="hps">producer of</span> <span class="hps">fertilizers</span>
<span class="hps">and</span> <span class="hps">other</span>
<span class="hps">chemical</span> <span class="hps">products</span> which <span class="hps">are</span> <span
    class="hps">highly competitive</span> <span class="hps">and</span>
<span class="hps">mostly </span></span><span class="hps">wanted</span><span class="hps"><span
    xml:lang="en-us" lang="en-us"> by consumers</span></span><span xml:lang="en-us"
lang="en-us">.<br><strong><br><span class="hps">MISSION</span></strong></span><span class="hps"><span
    xml:lang="en-us" lang="en-us"></span></span></p>
<ol>
<li>Support the provision of national fertilizers to achieve food self-sufficiency program;</li>
<li>Increase business results to support the smooth operation of the Companys operations and business
development;</li>
<li>Developing business potential to support the national chemical industry and play an active role in
<em>community development.</em></li>
</ol>
<p><span class="hps"><strong>CORPORATE </strong></span><span class="hps"><strong>VALUES</strong></span><span
xml:lang="en-us" lang="en-us"><br></span></p>
<p><strong>1. Mandate</strong></p>
<p>- Definition: Uphold the trust given</p>
<p>- Code of Conduct:</p>
<ul>
<li>Fulfill promises and commitments</li>
<li>Responsible for tasks, decisions and actions that are taken</li>
<li>Stick to moral and ethical values</li>
</ul>
<p><strong>2. Competence</strong></p>
<p>- Definition: Continuously learning and developing capabilities</p>
<p>- Code of Conduct:</p>
<ul>
<li>Improve self-competence to respond the challenges that always change</li>
<li>Helping others to learn something</li>
<li>complete tasks with the highest quality</li>
</ul>
<p><strong>3. Harmonious</strong></p>
<p>- Definition: Caring for each other and respecting differences</p>
<p>- Code of Conduct:</p>
<ul>
<li>Respecting everyone regardless of background</li>
<li>Loves to help others</li>
<li>Build a work environment conducive</li>
</ul>
<p><strong>4. Loyal</strong></p>
<p>- Definition: Dedicated and prioritizing the interests of the Nation and the State</p>
<p>- Code of Conduct:</p>
<ul>
<li>Maintaining the good name of fellow employees, leaders, SOEs and the State</li>
<li>Willing to sacrifice to achieve greater goals</li>
<li>Obey the leadership as long as it does not contradict with law and ethics</li>
</ul>
<p><strong>5. Adaptive</strong></p>
<p>- Definition: Continue to do innovation and enthusiastic in driving or dealing with change</p>
<p>- Code of Conduct:</p>
<ul>
<li>Quickly adaptive to be better</li>
<li>Continuously make improvements following technological developments</li>
<li>Acting proactively</li>
</ul>
<p><strong>6.</strong> <strong>Collaborative</strong></p>
<p>- Definition: Building synergistic cooperation</p>
<p>- Code of Conduct:</p>
<ul>
<li>Providing opportunities for various parties to contribute</li>
<li>Very open in working together to generate added value</li>
<li>Mobilizing the use of various resources for common goals</li>
</ul>
<p>The acronym of PT Petrokimia Gresik’s <strong>Values is AKHLAK, </strong>with an acronym formation process as
follows:</p>
<p><strong>A</strong>manah (Mandate)</p>
<p><strong>K</strong>ompeten (Competence)</p>
<p><strong>H</strong>armonis (Harmonius)</p>
<p><strong>L</strong>oyal (Loyal)</p>
<p><strong>A</strong>daptif (Adaptive)</p>
<p><strong>K</strong>olaboratif (Collaborative)</p>
<p><em><br></em></p>
<p><em>updated 18122020</em></p>
<p></p>
<p> <em> </em></p>
<p></p>
<div class="modal fade" id="page-content-image" tabindex="-1" role="dialog"
aria-labelledby="page-content-image-title" aria-hidden="true">
<div class="modal-dialog modal-xl" role="document">
<div class="modal-content">
    <img class="img-responsive"
        src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-horizontal.jpg"
        alt="">
</div>
</div>
</div>',
        'img' => ''
    ]);
    Profile::create([
        'title' => 'Company History',
        'slug' => 'Company-History',
        'category' => '1',
        'content' => '<div class="mt-4 page-content"><p style="text-align: justify">PT Petrokimia Gresik is the most complete fertilizer company in Indonesia, which was initially established under the name Project of Petrokimia Surabaya.</p><p style="text-align: justify"></p><p style="text-align: justify"> The construction agreement was mutually signed on August 10th, 1964 with the effective date on December 8th, 1964. Total current production reaches 8.9 million tons per year, consisting of 5 (five) million tons/year of fertilizer products, and about 3.9 million tons per year of non fertilizer products. The project was officially inaugurated by His Excellency The President of The Republic of Indonesia on July 10th, 1972. Hence the date is ultimately commemorated as the anniversary of PT Petrokimia Gresik. <br></p><p style="text-align: justify">Shareholder structure of PT Petrokimia Gresik comprises PT Pupuk Indonesia (Persero) that has 2,393,033 shares or amounting to Rp2,393,033,000,000 (99.9975%) and Yayasan Petrokimia Gresik (Petrokimia Gresik Foundation) that has 60 shares or amounting to Rp60,000,000 (0.0025%).</p><p>The number of employees as of 31 October 2021 is 2.066 people</p><table class="table table-hover"><tbody><tr><td><a class="image-popup-container aos-init cursor-pointer d-inline-block position-relative" data-toggle="modal" data-target="#page-content-image" data-aos="fade-up" data-aos-duration="1200"><img src="https://storage.googleapis.com/pkg-portal-bucket/Pg_SejarahPerusahaan_EN.jpg" alt="" class="lazyload image-popup loaded" data-src="https://storage.googleapis.com/pkg-portal-bucket/Pg_SejarahPerusahaan_EN.jpg" data-was-processed="true"><div class="img-overlay justify-content-center align-items-center"><i class="fas fa-search-plus fa-2x text-warning"></i></div></a></td></tr></tbody></table><p></p><p>PT Petrokimia Gresik currently occupies an area of ​​more than 450 hectares in Gresik Regency, East Java. This subsidiary of PT Pupuk Indonesia (Persero) turned into an Agroindustry Solution company to support the program to achieve National Food Security, and progress in the world of agriculture.</p><p><em>Updated, 08112021<br></em></p><div class="modal fade" id="page-content-image" tabindex="-1" role="dialog" aria-labelledby="page-content-image-title" aria-hidden="true"><div class="modal-dialog modal-xl" role="document"><div class="modal-content">
<img class="img-responsive" src="https://storage.googleapis.com/pkg-portal-bucket/images/template/placeholder-horizontal.jpg" alt=""></div></div></div></div>',
        'img' => ''
    ]);

    }
}
