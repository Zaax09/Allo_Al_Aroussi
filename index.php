<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allo Al Aroussi</title>
    <link rel="stylesheet" href="CSS/index.css">
    <script src="https://kit.fontawesome.com/4e1c4a026d.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

</head>
<body>
    <header>

            <div class="left">
                <a href="Login.php"><img src="img/profile_user.png" alt="profile_user" height="30px"></a>
                <a href="#"><img src="img/heart.png" alt="heart" height="30px"></a>
            </div>
            
                <nav>
                    <ul>
                
                        <li><a href="#">مدونة</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a class="gg" href="#">الوكلاء العقاريين</a></li>
                        <li><a class="gg" href="#">مشاريع جديدة</a></li>
                        <li><a href="#">للكراء</a></li>
                        <li><a href="#">للبيع</a></li>
                    </ul>
                </nav>
                <div class="logo">
                <a href="#"><img src="img/logo.png" alt="logo" height="50px"></a>
                </div>
    </header>

    <div class="header">
        
       <div class="hh1"><h1>ابحث عن بيتك الجديد</h1></div>

       <div class="filter-form">
            <div class="f-form">
                <p id="filter-p">البحث المتقدم</p>

                <form action="/action_page.php">

                        <button id="Search" type="submit">بحث</button>

                            <select id="Property-" name="Property-">
                                <option value="volvo">(m²) المساحة </option>
                                <option value="saab">60 m² من</option>
                                <option value="saab">100 m² من</option>
                                <option value="saab">200 m² من</option>
                                <option value="saab">500 m² من</option>
                                <option value="saab">1000 m² من</option>
                                <option value="saab">3000 m² من</option>
                                <option value="saab">5000 m² من</option>
                                <option value="saab">10 000 m² من</option>
                                <option value="saab">100 000 m² من</option>
                            </select>

                            <select id="Property-Price" name="Property-Price">
                            <option value="volvo">السعر</option>
                                <option value="saab">500</option>
                                <option value="fiat">1000</option>
                                <option value="audi">1500</option> 
                                <option value="volvo">2500</option>
                                <option value="saab">3000</option>
                                <option value="fiat">4000</option>
                                <option value="audi">5000</option> 
                                <option value="volvo">7000</option>
                                <option value="saab">10 000</option>
                                <option value="fiat">20 000</option>
                                <option value="audi">30 000</option> 
                                <option value="volvo">50 000</option>
                                <option value="saab">70 000</option>
                                <option value="fiat">90 000</option>
                                <option value="audi">100 000</option>
                                <option value="audi">500 000</option>
                                <option value="audi">1 000 000</option>
                                <option value="audi">10 000 000</option>
                                <option value="audi">100 000 000</option>
                            </select>
                            
                            <select id="Property-Type" name="Property-Type">
                                <option value="volvo">نوع العقار</option>
                                <option value="volvo">مكتب</option>
                                <option value="saab">متجر</option>
                                <option value="fiat">واجهة محل</option>
                                <option value="audi">محل تجاري</option>

                                <option value="volvo">عمارة بالكامل</option>
                                <option value="saab">أرض</option>
                                <option value="fiat">مصنع</option>
                                <option value="audi">كراج</option>
                                
                                <option value="saab">مطعم</option>
                                <option value="fiat">فندق</option>
                                <option value="audi">بيت ضيافة</option>
                                <option value="audi">فيلا تجارية</option>
                            </select>


                        <input class="filter-input" id="input1"  type="text">
                </form>
            </div>
       </div>

    </div>

    <section>
        <div class="Services1">

                 <div class="Services-top">
                    <div class="line" id="line-Services"></div>
                    <h2 id="Our-Services-p">الخدمات التي نقدمها</h2>
                    <div class="line" id="line-Services"></div>
                </div> 

                <div class="o-s"> 
                    <div class="All-Services">

                        <a href="#" class="Servicess" id="Service1"></a>
                        <a href="#" class="Servicess" id="Service2"></a>
                        <a href="#" class="Servicess" id="Service3"></a>
                        <a href="#" class="Servicess" id="Service4"></a>
                        <a href="#" class="Servicess" id="Service5"></a>
                        <a href="#" class="Servicess" id="Service6"></a>
                        <!-- <a href="#" class="Servicess" id="Service7"></a> -->

                    </div>
                </div>
        </div>
    </section>

    <section>
        <div class="Services2">

                 <div class="Services-top">
                    <div class="line" id="line-Services"></div>
                    <h2 id="Our-Services-p">القوائم الأكثر شعبية</h2>
                    <div class="line" id="line-Services"></div>
                </div> 

                <div class="s-i"> 

                    <div class="tt">
                    <a  class="elementor-icon elementor-animation-" href="#"><i aria-hidden="true" id="icon1" class="fas fa-key"></i> </a>
                    <p class="gg">عقارات للكراء</p>
                    </div>

                    <div class="tt">
                    <a class="elementor-icon elementor-animation-" href="#"><i aria-hidden="true" id="icon2" class="fas fa-handshake"></i> </a>
                    <p>عقارات للبيع</p>
                    </div>

                    <div class="tt">
                    <a class="elementor-icon elementor-animation-" href="#"><i aria-hidden="true" id="icon3" class="fas fa-building"></i> </a>
                    <p>مشاريع جديدة</p>
                    </div>



                    <div class="tt">
                    <a class="elementor-icon elementor-animation-" href="#"><i aria-hidden="true" id="icon4" class="fas fa-suitcase"></i> </a>
                    <p>كراء موسمي</p>
                    </div>


                    <div class="tt">
                    <a class="elementor-icon elementor-animation-" href="#"><i aria-hidden="true" id="icon5" class="fas fa-map"></i> </a>
                    <p>أراضي سكنية</p>
                    </div>


                    <div class="tt">
                    <a class="elementor-icon elementor-animation-" href="#"><i aria-hidden="true" id="icon6" class="fas fa-home"></i> </a>
                    <p>منازل سكنية</p>
                    </div>

                </div>
        </div>
    </section>

    <section id="section2">

        <h2 id="hh2">ابحث عن عقارات للبيع و للكراء في المغرب</h2>
        <p id="pp2">المدن الأكثر طلبا في المغرب</p>
        
                <div class="All-cities">

                        <a href="#" class="cities" id="Tangier"></a>
                        <a href="#" class="cities" id="Casablanca"><h3></h3></a>
                        <a href="#" class="cities" id="Rabat"></a>
                        <a href="#" class="cities" id="Marrakech"></a>
                        <a href="#" class="cities" id="Agadir"></a>               
                </div>

                <div class="tit2">
                        <p id="ppp1">الأكثر بحثاً عن عقارات في المغرب</p>
                        <p id="ppp2">اخترنا لكم مجموعة من المدن الأكثر شهرة في العقار</p>
                </div>
                
   
        


    </section>

    <section>
                <div class="Services-top">
                    <div class="line" id="line-Services"></div>
                    <h2 id="Our-Services-p">العقارات الموصى بها في المغرب</h2>
                    <div class="line" id="line-Services"></div>
                </div>
    </section>





<!-- ----------------------------------------------------------- -->


    <!-- <div class="cards">

        <div class="card">

            <div class="Home-img">
            <i class="fa fa-heart" aria-hidden="true"></i>
            </div>

            <div class="content">
                <h2>بلبيلب لبلبيل لل يبليب</h2>
                <p>200.00 DH</p>
                <p>قللقليقل  قللققلي</p>

                <div class="Inside-House">
                    <i class="fa fa-heart" aria-hidden="true">dddddddd</i>
                    <i class="fa fa-heart" aria-hidden="true">fffffffff</i>
                    <i class="fa fa-heart" aria-hidden="true">gggggg</i>
                </div>


            </div>


        </div>

        <div class="card">

            <div class="Home-img">
            <i class="fa fa-heart" aria-hidden="true"></i>
            </div>

            <div class="content">
                <h2>بلبيلب لبلبيل لل يبليب</h2>
                <p>200.00 DH</p>
                <p>قللقليقل  قللققلي</p>

                <div class="Inside-House">
                    <i class="fa fa-heart" aria-hidden="true">dddddddd</i>
                    <i class="fa fa-heart" aria-hidden="true">fffffffff</i>
                    <i class="fa fa-heart" aria-hidden="true">gggggg</i>
                </div>


            </div>


        </div>


        <div class="card">

            <div class="Home-img">
            <i class="fa fa-heart" aria-hidden="true"></i>
            </div>

            <div class="content">
                <h2>بلبيلب لبلبيل لل يبليب</h2>
                <p>200.00 DH</p>
                <p>قللقليقل  قللققلي</p>

                <div class="Inside-House">
                    <i class="fa fa-heart" aria-hidden="true">dddddddd</i>
                    <i class="fa fa-heart" aria-hidden="true">fffffffff</i>
                    <i class="fa fa-heart" aria-hidden="true">gggggg</i>
                </div>


            </div>


        </div>

    </div> -->





<!-- ----------------------------------------------------------- -->
    
    
    



    <section>
                <div class="Lists">


                    <div class="List1">
                        <p class="List-p">المناطق الأكثر شعبية</p>
                        <div class="linee"></div>

                        <a class="Lists-a"  href="#">فلل ومنازل للبيع في مراكش</a>
                        <a class="Lists-a" href="#">اراضي للبيع في طنجة </a>
                        <a class="Lists-a" href="#">شقق للبيع في طنجة</a>
                        <a class="Lists-a" href="#">فلل ومنازل للبيع في طنجة </a>
                        <a class="Lists-a" href="#">اراضي للبيع في مراكش</a>
                        <a class="Lists-a" href="#">شقق للبيع في مراكش</a>

  

                    </div>

                    <div class="List2">
                        <p class="List-p">الأماكن الأكثر بحثاً</p>
                        <div class="linee"></div>

                        <a class="Lists-a" href="#">شقق للإيجار في مراكش</a>
                        <a class="Lists-a" href="#">شقق للإيجار في الدار البيضاء</a>
                        <a class="Lists-a" href="#">فلل ومنازل للإيجار في طنجة </a>
                        <a class="Lists-a" href="#">شقق للإيجار في جذر</a>
                        <a class="Lists-a" href="#">شقق للإيجار في طنجة</a>
                        <a class="Lists-a" href="#">فلل ومنازل للإيجار في مراكش</a>

                    </div>

                    <div class="List3">
                        <p class="List-p">كراء موسمي </p>
                        <div class="linee"></div>
                        
                        <a class="Lists-a" href="#">شقق في طنجة</a>
                        <a class="Lists-a" href="#">شقق في الرباط</a>
                        <a class="Lists-a" href="#">شقق في مرتيل</a>
                        <a class="Lists-a" href="#">شقق في أكادير</a>
                        <a class="Lists-a" href="#">شقق في تطوان</a>
                        <a class="Lists-a" href="#">شقق في فاس</a>


                    </div>


                    
                    <div class="List4">
                        <p class="List-p">البحث شعبية</p>
                        <div class="linee"></div>

                        <a class="Lists-a" href="#">البحث شعبية</a>
                        <a class="Lists-a" href="#">شقق للبيع في المغرب</a>
                        <a class="Lists-a" href="#">فلل ومنازل للبيع في المغرب</a>
                        <a class="Lists-a" href="#">اراضي للبيع في المغرب</a>
                        <a class="Lists-a" href="#">شقق للإيجار في المغرب</a>
                        <a class="Lists-a" href="#">فلل ومنازل للإيجار في المغرب</a>

                     

                    </div>
                    
                </div>
    </section>


  
    <footer>

        <div class="Social_media">
            
                    <div class="media">
                    <a  class="elementor-icon" href="#"><i aria-hidden="true" id="s-icon1" class="fab fa-facebook-f"></i></a>
                    </div>

                    <div class="media">
                    <a class="elementor-icon elementor-animation-" href="#"><i aria-hidden="true" id="s-icon2" class="fab fa-twitter"></i> </a>
                    </div>

                    <div class="media">
                    <a class="elementor-icon elementor-animation-" href="#"><i aria-hidden="true" id="s-icon3" class="fa fa-instagram"></i> </a>
                    </div>



                    <div class="media">
                    <a class="elementor-icon elementor-animation-" href="#"><i aria-hidden="true" id="s-icon4" class="fab fa-linkedin-in"></i> </a>
                    </div>

        </div>



        <header>
            
                <nav>
                    <ul>
                
                        <li><a href="#">مدونة</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a class="gg" href="#">الوكلاء العقاريين</a></li>
                        <li><a class="gg" href="#">مشاريع جديدة</a></li>
                        <li><a href="#">للكراء</a></li>
                        <li><a href="#">للبيع</a></li>
                    </ul>
                </nav>
                <div class="logo">
                <a href="#"><img src="img/logo.png" alt="logo" height="50px"></a>
                </div>
    </header>






        <p id="c">يضمن الموقع احترام سياسة الخصوصية وفقا للقانون رقم <samp id="nm">09-08</samp> المتعلق بحماية الأشخاص فيما يتعلق بمعالجة البيانات الشخصية</p>
    </footer>

</body>
</html>