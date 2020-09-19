<template>
  <main class="main">
    <div class="container main-container">
      <div class="user">
        <div class="user-avatar"></div>
        <p class="user-name">Сергей Постолов</p>
        <p class="user-desription">Щедрый меценат</p>
        <div class="user-info">тут должна быть инфа</div>
        <p class="user-support">Написать в поддержку</p>
      </div>
      <!-- /.user -->
      <div class="content">
        <div class="tabs">
          <input
            class="tabs-marathon__my"
            type="radio"
            name="tabs-marathon"
            id="tab-btn-1"
            value
            checked
          />
          <label class="tabs-btn__title" for="tab-btn-1">Мои марафоны</label>
          <input
            class="tabs-marathon__search"
            type="radio"
            name="tabs-marathon"
            id="tab-btn-2"
            value
          />
          <label class="tabs-btn__title" for="tab-btn-2">Найти марафоны</label>

          <div class="my tabs-content" id="tabs-content__1">
            <div class="my-top">
              <a href="#" class="my-top__link">Активные</a>
              <a href="#" class="my-top__link">Архив</a>
              <a href="#" class="my-top__link top-link__btn">Создать марафор</a>
            </div>
            <!-- /.my-top -->
            <div class="my-news">
              <swiper ref="mySwiper" :options="swiperOptions">
                <swiper-slide>
                  <div class="news">
                    <p
                      class="news-title"
                    >*ИМЯ* внёс 10 000 р. на счёт вашего марафона “Сохраним лес”</p>
                    <a href="#" class="news-description">Подробнее</a>
                    <a href="#" class="news-display">Скрыть</a>
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div class="news">
                    <p
                      class="news-title"
                    >*ИМЯ* внёс 10 000 р. на счёт вашего марафона “Сохраним лес”</p>
                    <a href="#" class="news-description">Подробнее</a>
                    <a href="#" class="news-display">Скрыть</a>
                  </div>
                </swiper-slide>
                <swiper-slide>
                  <div class="news">
                    <p
                      class="news-title"
                    >*ИМЯ* внёс 10 000 р. на счёт вашего марафона “Сохраним лес”</p>
                    <a href="#" class="news-description">Подробнее</a>
                    <a href="#" class="news-display">Скрыть</a>
                  </div>
                </swiper-slide>

                <div class="swiper-pagination" slot="pagination"></div>
              </swiper>
            </div>
            <!-- /.my-news -->
          </div>
          <div class="search tabs-content" id="tabs-content__2"></div>
        </div>
        <!-- /.tabs -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.container main-container -->
  </main>
</template>

<script>
import { Swiper, SwiperSlide } from "vue-awesome-swiper";
import "swiper/css/swiper.css";

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  // directives: {
  //     directive
  // },
  data() {
    return {
      swiperOptions: {
        loop: true,
        pagination: {
          el: ".swiper-pagination",
        },
      },
    };
  },
};
</script>
<style lang="scss"></style>
