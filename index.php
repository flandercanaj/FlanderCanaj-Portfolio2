<?php require 'header.php' ?>
<section id="login" >
<!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="login" >
	<a class="navbar-brand" href="">Logo</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" 
	data-tagert="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" 
	aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button> -->

    <!--==================== HEADER ====================-->
    <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="img/logo11.png" alt="" class="nav__logo-img">
                    MyPortfolio
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>

                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>

                        <li class="nav__item">
                            <a href="#trick" class="nav__link">Skills</a>
                        </li>

                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Concact</a>
                        </li>

                        <li class="nav__item">
                        <a class="nav-link" href="login.php">Login</a>
                        </li>

                        <a href="#" class="button button--ghost">Support</a>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <img src="img/nav-img.png" alt="" class="nav__img">
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

            </nav>
        </header>

    <main class="main">
            <!--==================== HOME ====================-->
            <section class="home container" id="home">
                <div class="swiper home-swiper">
                    <div class="swiper-wrapper">
                        <!-- HOME SLIDER 1 -->
                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img  style=" width:313px; zoom:110%; margin-top:-10px;" src="img/box-pic.png" alt="" class="home__img">
                                    <div class="home__indicator"></div>

    
                                    <div class="home__details-img">
                                        <h4 class="home__details-title">Flander Canaj</h4>
                                        <span class="home__details-subtitle">Our First pick</span>
                                    </div>
                                </div>
    
                                <div class="home__data">
                                    <h3 class="home__subtitle">#1 Top Web Designers</h3>
                                    <h1 class="home__title">Hi,I'm <br>Flander <br> </h1>
                                    <p class="home__description">Seeking to use my superior knowledge, to serve your company in an internship position.
                                    </p>

                                    <div class="home__buttons">
                                        <a href="#" class="button">Hire Me</a>
                                        <a href="#" class="button--link button--flex">Next Job-seeker <i class='bx bx-right-arrow-alt button__icon'></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>

                       
            </section>
            
        

            <!--==================== ABOUT ====================-->
            <section class="section about" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">About Me <br></h2>
                        <p class="about__description"> I am Flander Canaj,I am 18 years old, currently I am an Undergraduate UBT College student on Academic Year, studying Computer Sciences 
                            and Engineering. <br>  <br> I like exploring technical equipments, and learning how to use them in different terms. Also I am very creative,
                            one of the main reasons why I love designing Webs.
                        </p>
                        <a href="#" class="button">Know more</a>
                    </div>

                  
                    <div class="discount__container container grid">
                    <div class="discount__data">
                        
                    </div>

                    <img src="img/box-pic.png" alt="" class="discount__img">
                </div>
                </div>
            </section>

            <!--==================== Skills ====================-->
            <section class="section trick" id="trick">
                <h2 class="section__title" >Skills  </h2>

                <div class="trick__container container grid">
                    <div class="trick__content">
                        <img src="img/html.png" alt="" class="trick__img">
                        <h3 class="trick__title">HTML</h3>
                        <span class="trick__subtitle">Advanced</span>
                        <span class="trick__price">100%</span>
                        <button class="button trick__button">
                            <i class='bx bx-cart-alt trick__icon'></i>
                        </button>
                    </div>

                    <div class="trick__content">
                        <img src="img/css.png" alt="" class="trick__img">
                        <h3 class="trick__title">CSS</h3>
                        <span class="trick__subtitle">Advanced</span>
                        <span class="trick__price">100%</span>
                        <button class="button trick__button">
                            <i class='bx bx-cart-alt trick__icon'></i>
                        </button>
                    </div>

                    <div class="trick__content">
                        <img src="img/js.png" alt="" class="trick__img">
                        <h3 class="trick__title">JavaScript</h3>
                        <span class="trick__subtitle">Indermediate</span>
                        <span class="trick__price">80%</span>
                        <button class="button trick__button">
                            <i class='bx bx-cart-alt trick__icon'></i>
                        </button>
                    </div>

                    <div class="trick__content">
                        <img src="img/php11.png" alt="" class="trick__img">
                        <h3 class="trick__title">PHP</h3>
                        <span class="trick__subtitle">Pre Intermediate</span>
                        <span class="trick__price">50%</span>
                        <button class="button trick__button">
                            <i class='bx bx-cart-alt trick__icon'></i>
                        </button>
                    </div>

                    <div class="trick__content">
                        <img src="img/mysql.png" alt="" class="trick__img">
                        <h3 class="trick__title">MySQL</h3>
                        <span class="trick__subtitle">Pre Intermediate</span>
                        <span class="trick__price">50%</span>
                        <button class="button trick__button">
                            <i class='bx bx-cart-alt trick__icon'></i>
                        </button>
                    </div>

                    <div class="trick__content">
                        <img src="img/figma22.png" alt="" class="trick__img">
                        <h3 class="trick__title">Figma</h3>
                        <span class="trick__subtitle">Advanced</span>
                        <span class="trick__price">100%</span>
                        <button class="button trick__button">
                            <i class='bx bx-cart-alt trick__icon'></i>
                        </button>
                    </div>
                </div>
            </section>
        
           
        
                        

            <div class="contact" id="contact">
        <section class="contact">
        <h2 class="section__title" >Concact  </h2>

            <div class="contact2">
                <form action="" class="contact__form">
                    <input type="text" placeholder="Name" class="contact__input">
                    <input type="mail" placeholder="Email" class="contact__input">
                    <textarea name="" id="" cols="0" rows="5" class="contact__input">Message</textarea>
                    <input type="button" value="Submit" class="contact__button button">
                </form>
            </div>
        </section>
    </div>
                    
                        
                        
                    
</div>
                </div>
            </section>
        </main>



						</nav>
        </header>

<main role="main" class="container">
	

</main>

</section>
<?php require 'footer.php' ?>

