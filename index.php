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

                <div class="s-i"> 
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
                    <a class="elementor-icon elementor-animation-" href="#"><i aria-hidden="true" class="fas fa-key"></i> </a>
                    <p class="gg">عقارات للكراء</p>
                    </div>

                    <div class="tt">
                    <a class="elementor-icon elementor-animation-" href="#"><i aria-hidden="true" class="fas fa-key"></i> </a>
                    <p>عقارات للبيع</p>
                    </div>

                    <div class="tt">
                    <a class="elementor-icon elementor-animation-" href="#"><i aria-hidden="true" class="fas fa-key"></i> </a>
                    <p>مشاريع جديدة</p>
                    </div>



                    <div class="tt">
                    <a class="elementor-icon elementor-animation-" href="#"><i aria-hidden="true" class="fas fa-key"></i> </a>
                    <p>كراء موسمي</p>
                    </div>


                    <div class="tt">
                    <a class="elementor-icon elementor-animation-" href="#"><i aria-hidden="true" class="fas fa-key"></i> </a>
                    <p>أراضي سكنية</p>
                    </div>


                    <div class="tt">
                    <a class="elementor-icon elementor-animation-" href="#"><i aria-hidden="true" class="fas fa-key"></i> </a>
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
                        <a href="#" class="cities" id="Casablanca"></a>
                        <a href="#" class="cities" id="Rabat"></a>
                        <a href="#" class="cities" id="Marrakech"></a>
                        <a href="#" class="cities" id="Agadir"></a>

                </div>
   
        


    </section>

    <section>
                <div class="Services-top">
                    <div class="line" id="line-Services"></div>
                    <h2 id="Our-Services-p">العقارات الموصى بها في المغرب</h2>
                    <div class="line" id="line-Services"></div>
                </div>
    </section>













    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>

</body>
</html>