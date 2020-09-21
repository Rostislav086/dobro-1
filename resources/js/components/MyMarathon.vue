<template>
  <div>
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
              <p class="news-title">*ИМЯ* внёс 10 000 р. на счёт вашего марафона “Сохраним лес”</p>
              <a href="#" class="news-description">Подробнее</a>
              <a href="#" class="news-display">Скрыть</a>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="news">
              <p class="news-title">*ИМЯ* внёс 10 000 р. на счёт вашего марафона “Сохраним лес”</p>
              <a href="#" class="news-description">Подробнее</a>
              <a href="#" class="news-display">Скрыть</a>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="news">
              <p class="news-title">*ИМЯ* внёс 10 000 р. на счёт вашего марафона “Сохраним лес”</p>
              <a href="#" class="news-description">Подробнее</a>
              <a href="#" class="news-display">Скрыть</a>
            </div>
          </swiper-slide>

          <div class="swiper-pagination" slot="pagination"></div>
        </swiper>
      </div>
      <!-- /.my-news -->
      <div class="my-marathon">
        <div class="my-marathon__block" v-for="marathon in myMarathons" :key="marathon.id">
          <div class="item">
            <div class="item-top">
              <p class="item-top__title">{{marathon.title}}</p>
              <p class="item-top__date">{{marathon.date}}</p>
            </div>
            <div class="item-bottom">
              <p class="item-bottom__money">
                Собрано:
                <br />
                {{marathon.allMoney}} / {{marathon.getMoney}}
              </p>
              <p class="item-bottom__percent">{{marathon.percent}}%</p>
            </div>
          </div>
          <p class="item-description">Вы пожертвовали 4 000 руб.</p>
          <a href="#" class="item-button">Помочь</a>
          <a href="#" class="item-img__share">
            <img src="#" alt="share" />
          </a>
        </div>
        <!-- /.my-marathon__block -->
      </div>
      <!-- /.my-marathon -->
    </div>
  </div>
</template>

<script>
import { Swiper, SwiperSlide } from "vue-awesome-swiper";
import "swiper/css/swiper.css";

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  data() {
    return {
      myMarathons: [
        {
          id: 1,
          title: "Защитим лес вместе",
          date: "20 марта 2020г.",
          allMoney: "700 000руб",
          getMoney: "130 000руб",
          percent: "68",
        },
        {
          id: 2,
          title: "Защитим лес вместе",
          date: "20 марта 2020г.",
          allMoney: "700 000руб",
          getMoney: "130 000руб",
          percent: "68",
        },
        {
          id: 2,
          title: "Защитим лес вместе",
          date: "20 марта 2020г.",
          allMoney: "700 000руб",
          getMoney: "130 000руб",
          percent: "68",
        },
      ],
      swiperOptions: {
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      },
    };
  },
};
</script>