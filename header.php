<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <?php wp_head(); ?>


</head>
  
<body>

  <header class="header">
    <div class="container">
      <div class="header__top">
       <?php the_custom_logo(); ?> 
        <a class="phone" href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a>
      </div>
      <div class="header__content">
        <h1 class="header__title">
          авто из сша “под ключ”
        </h1>
        <h2 class="header__subtitle">
          ЗАКАЖИ СЕБЕ АВТО ИЗ США С ВЫГОДОЙ ДО 40%
        </h2>
        <p class="header__text">
          Подбор, покупка, доставка, растаможка, ремонт, оформление по договору
        </p>
        <a class="button" href="#">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
        <div class="social header__social">
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo('template_url');?>/assets/images/instagram.svg" alt="instagram icon">
          </a>
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo('template_url');?>/assets/images/telegram.svg" alt="telegram icon">
          </a>
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo('template_url');?>/assets/images/whatsapp.svg" alt="whatsapp icon">
          </a>
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo('template_url');?>/assets/images/facebook.svg" alt="facebook icon">
          </a>
        </div>
        <img class="header__images" src="<?php bloginfo('template_url');?>/assets/images/ford__mustang.png" alt="ford__mustang">
      </div>
    </div>
  </header>